<?php
namespace Danwe\Bitcoin;

use LinusU\Bitcoin\AddressValidator;
use InvalidArgumentException;

/**
 * For instantiating value objects representing a (compressed) bitcoin addresses.
 *
 * @since 1.0.0
 * @author Daniel A. R. Werner
 */
class Address {

	private static $addressValidator = null;

	/**
	 * The address's string representation.
	 * @type string
	 */
	protected $addressString;

	/**
	 * @param string $addressString The address's string representation.
	 *
	 * @throws InvalidArgumentException If $addressString is not a valid bitcoin address.
	 */
	function __construct( $addressString ) {
		if( is_null( self::$addressValidator ) ) {
			self::$addressValidator = new AddressValidator();
		}
		$isValid = self::$addressValidator->isValid( $addressString, AddressValidator::MAINNET );

		if( !$isValid ) {
			throw new InvalidArgumentException( 'given string is not a bitcoin address' );
		}

		$this->addressString = $addressString;
	}

	/**
	 * Returns whether the address is equal to another given address.
	 *
	 * @return bool
	 */
	function equals( $other ) {
		if( ! ( $other instanceof Address ) ) {
			return false;
		}
		return $this === $other
			|| $this->asString() === $other->asString();
	}

	/**
	 * Returns a string representation of the address. Basically the same string given to the
	 * constructor.
	 *
	 * @return string
	 */
	public function asString() {
		return $this->__toString();
	}

	public function __toString() {
		return $this->addressString;
	}
}
