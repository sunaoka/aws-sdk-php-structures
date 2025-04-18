<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $profileId
 * @property string|null $profileARN
 * @property string|null $firstName
 * @property string|null $middleName
 * @property string|null $lastName
 * @property string|null $accountNumber
 * @property string|null $emailAddress
 * @property string|null $phoneNumber
 * @property string|null $additionalInformation
 * @property string|null $partyType
 * @property string|null $businessName
 * @property string|null $birthDate
 * @property string|null $gender
 * @property string|null $mobilePhoneNumber
 * @property string|null $homePhoneNumber
 * @property string|null $businessPhoneNumber
 * @property string|null $businessEmailAddress
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $address3
 * @property string|null $address4
 * @property string|null $city
 * @property string|null $county
 * @property string|null $country
 * @property string|null $postalCode
 * @property string|null $province
 * @property string|null $state
 * @property string|null $shippingAddress1
 * @property string|null $shippingAddress2
 * @property string|null $shippingAddress3
 * @property string|null $shippingAddress4
 * @property string|null $shippingCity
 * @property string|null $shippingCounty
 * @property string|null $shippingCountry
 * @property string|null $shippingPostalCode
 * @property string|null $shippingProvince
 * @property string|null $shippingState
 * @property string|null $mailingAddress1
 * @property string|null $mailingAddress2
 * @property string|null $mailingAddress3
 * @property string|null $mailingAddress4
 * @property string|null $mailingCity
 * @property string|null $mailingCounty
 * @property string|null $mailingCountry
 * @property string|null $mailingPostalCode
 * @property string|null $mailingProvince
 * @property string|null $mailingState
 * @property string|null $billingAddress1
 * @property string|null $billingAddress2
 * @property string|null $billingAddress3
 * @property string|null $billingAddress4
 * @property string|null $billingCity
 * @property string|null $billingCounty
 * @property string|null $billingCountry
 * @property string|null $billingPostalCode
 * @property string|null $billingProvince
 * @property string|null $billingState
 * @property array<string, string>|null $custom
 */
class CustomerProfileAttributes extends Shape
{
    /**
     * @param array{
     *     profileId?: string|null,
     *     profileARN?: string|null,
     *     firstName?: string|null,
     *     middleName?: string|null,
     *     lastName?: string|null,
     *     accountNumber?: string|null,
     *     emailAddress?: string|null,
     *     phoneNumber?: string|null,
     *     additionalInformation?: string|null,
     *     partyType?: string|null,
     *     businessName?: string|null,
     *     birthDate?: string|null,
     *     gender?: string|null,
     *     mobilePhoneNumber?: string|null,
     *     homePhoneNumber?: string|null,
     *     businessPhoneNumber?: string|null,
     *     businessEmailAddress?: string|null,
     *     address1?: string|null,
     *     address2?: string|null,
     *     address3?: string|null,
     *     address4?: string|null,
     *     city?: string|null,
     *     county?: string|null,
     *     country?: string|null,
     *     postalCode?: string|null,
     *     province?: string|null,
     *     state?: string|null,
     *     shippingAddress1?: string|null,
     *     shippingAddress2?: string|null,
     *     shippingAddress3?: string|null,
     *     shippingAddress4?: string|null,
     *     shippingCity?: string|null,
     *     shippingCounty?: string|null,
     *     shippingCountry?: string|null,
     *     shippingPostalCode?: string|null,
     *     shippingProvince?: string|null,
     *     shippingState?: string|null,
     *     mailingAddress1?: string|null,
     *     mailingAddress2?: string|null,
     *     mailingAddress3?: string|null,
     *     mailingAddress4?: string|null,
     *     mailingCity?: string|null,
     *     mailingCounty?: string|null,
     *     mailingCountry?: string|null,
     *     mailingPostalCode?: string|null,
     *     mailingProvince?: string|null,
     *     mailingState?: string|null,
     *     billingAddress1?: string|null,
     *     billingAddress2?: string|null,
     *     billingAddress3?: string|null,
     *     billingAddress4?: string|null,
     *     billingCity?: string|null,
     *     billingCounty?: string|null,
     *     billingCountry?: string|null,
     *     billingPostalCode?: string|null,
     *     billingProvince?: string|null,
     *     billingState?: string|null,
     *     custom?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
