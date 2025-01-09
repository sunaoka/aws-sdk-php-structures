<?php

namespace Sunaoka\Aws\Structures\QConnect\RenderMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountNumber
 * @property string $additionalInformation
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $address4
 * @property string $billingAddress1
 * @property string $billingAddress2
 * @property string $billingAddress3
 * @property string $billingAddress4
 * @property string $billingCity
 * @property string $billingCountry
 * @property string $billingCounty
 * @property string $billingPostalCode
 * @property string $billingProvince
 * @property string $billingState
 * @property string $birthDate
 * @property string $businessEmailAddress
 * @property string $businessName
 * @property string $businessPhoneNumber
 * @property string $city
 * @property string $country
 * @property string $county
 * @property array<string, string> $custom
 * @property string $emailAddress
 * @property string $firstName
 * @property string $gender
 * @property string $homePhoneNumber
 * @property string $lastName
 * @property string $mailingAddress1
 * @property string $mailingAddress2
 * @property string $mailingAddress3
 * @property string $mailingAddress4
 * @property string $mailingCity
 * @property string $mailingCountry
 * @property string $mailingCounty
 * @property string $mailingPostalCode
 * @property string $mailingProvince
 * @property string $mailingState
 * @property string $middleName
 * @property string $mobilePhoneNumber
 * @property string $partyType
 * @property string $phoneNumber
 * @property string $postalCode
 * @property string $profileARN
 * @property string $profileId
 * @property string $province
 * @property string $shippingAddress1
 * @property string $shippingAddress2
 * @property string $shippingAddress3
 * @property string $shippingAddress4
 * @property string $shippingCity
 * @property string $shippingCountry
 * @property string $shippingCounty
 * @property string $shippingPostalCode
 * @property string $shippingProvince
 * @property string $shippingState
 * @property string $state
 */
class CustomerProfileAttributes extends Shape
{
    /**
     * @param array{
     *     accountNumber?: string,
     *     additionalInformation?: string,
     *     address1?: string,
     *     address2?: string,
     *     address3?: string,
     *     address4?: string,
     *     billingAddress1?: string,
     *     billingAddress2?: string,
     *     billingAddress3?: string,
     *     billingAddress4?: string,
     *     billingCity?: string,
     *     billingCountry?: string,
     *     billingCounty?: string,
     *     billingPostalCode?: string,
     *     billingProvince?: string,
     *     billingState?: string,
     *     birthDate?: string,
     *     businessEmailAddress?: string,
     *     businessName?: string,
     *     businessPhoneNumber?: string,
     *     city?: string,
     *     country?: string,
     *     county?: string,
     *     custom?: array<string, string>,
     *     emailAddress?: string,
     *     firstName?: string,
     *     gender?: string,
     *     homePhoneNumber?: string,
     *     lastName?: string,
     *     mailingAddress1?: string,
     *     mailingAddress2?: string,
     *     mailingAddress3?: string,
     *     mailingAddress4?: string,
     *     mailingCity?: string,
     *     mailingCountry?: string,
     *     mailingCounty?: string,
     *     mailingPostalCode?: string,
     *     mailingProvince?: string,
     *     mailingState?: string,
     *     middleName?: string,
     *     mobilePhoneNumber?: string,
     *     partyType?: string,
     *     phoneNumber?: string,
     *     postalCode?: string,
     *     profileARN?: string,
     *     profileId?: string,
     *     province?: string,
     *     shippingAddress1?: string,
     *     shippingAddress2?: string,
     *     shippingAddress3?: string,
     *     shippingAddress4?: string,
     *     shippingCity?: string,
     *     shippingCountry?: string,
     *     shippingCounty?: string,
     *     shippingPostalCode?: string,
     *     shippingProvince?: string,
     *     shippingState?: string,
     *     state?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
