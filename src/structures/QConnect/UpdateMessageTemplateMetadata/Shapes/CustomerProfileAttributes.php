<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountNumber
 * @property string|null $additionalInformation
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $address3
 * @property string|null $address4
 * @property string|null $billingAddress1
 * @property string|null $billingAddress2
 * @property string|null $billingAddress3
 * @property string|null $billingAddress4
 * @property string|null $billingCity
 * @property string|null $billingCountry
 * @property string|null $billingCounty
 * @property string|null $billingPostalCode
 * @property string|null $billingProvince
 * @property string|null $billingState
 * @property string|null $birthDate
 * @property string|null $businessEmailAddress
 * @property string|null $businessName
 * @property string|null $businessPhoneNumber
 * @property string|null $city
 * @property string|null $country
 * @property string|null $county
 * @property array<string, string>|null $custom
 * @property string|null $emailAddress
 * @property string|null $firstName
 * @property string|null $gender
 * @property string|null $homePhoneNumber
 * @property string|null $lastName
 * @property string|null $mailingAddress1
 * @property string|null $mailingAddress2
 * @property string|null $mailingAddress3
 * @property string|null $mailingAddress4
 * @property string|null $mailingCity
 * @property string|null $mailingCountry
 * @property string|null $mailingCounty
 * @property string|null $mailingPostalCode
 * @property string|null $mailingProvince
 * @property string|null $mailingState
 * @property string|null $middleName
 * @property string|null $mobilePhoneNumber
 * @property string|null $partyType
 * @property string|null $phoneNumber
 * @property string|null $postalCode
 * @property string|null $profileARN
 * @property string|null $profileId
 * @property string|null $province
 * @property string|null $shippingAddress1
 * @property string|null $shippingAddress2
 * @property string|null $shippingAddress3
 * @property string|null $shippingAddress4
 * @property string|null $shippingCity
 * @property string|null $shippingCountry
 * @property string|null $shippingCounty
 * @property string|null $shippingPostalCode
 * @property string|null $shippingProvince
 * @property string|null $shippingState
 * @property string|null $state
 */
class CustomerProfileAttributes extends Shape
{
    /**
     * @param array{
     *     accountNumber?: string|null,
     *     additionalInformation?: string|null,
     *     address1?: string|null,
     *     address2?: string|null,
     *     address3?: string|null,
     *     address4?: string|null,
     *     billingAddress1?: string|null,
     *     billingAddress2?: string|null,
     *     billingAddress3?: string|null,
     *     billingAddress4?: string|null,
     *     billingCity?: string|null,
     *     billingCountry?: string|null,
     *     billingCounty?: string|null,
     *     billingPostalCode?: string|null,
     *     billingProvince?: string|null,
     *     billingState?: string|null,
     *     birthDate?: string|null,
     *     businessEmailAddress?: string|null,
     *     businessName?: string|null,
     *     businessPhoneNumber?: string|null,
     *     city?: string|null,
     *     country?: string|null,
     *     county?: string|null,
     *     custom?: array<string, string>|null,
     *     emailAddress?: string|null,
     *     firstName?: string|null,
     *     gender?: string|null,
     *     homePhoneNumber?: string|null,
     *     lastName?: string|null,
     *     mailingAddress1?: string|null,
     *     mailingAddress2?: string|null,
     *     mailingAddress3?: string|null,
     *     mailingAddress4?: string|null,
     *     mailingCity?: string|null,
     *     mailingCountry?: string|null,
     *     mailingCounty?: string|null,
     *     mailingPostalCode?: string|null,
     *     mailingProvince?: string|null,
     *     mailingState?: string|null,
     *     middleName?: string|null,
     *     mobilePhoneNumber?: string|null,
     *     partyType?: string|null,
     *     phoneNumber?: string|null,
     *     postalCode?: string|null,
     *     profileARN?: string|null,
     *     profileId?: string|null,
     *     province?: string|null,
     *     shippingAddress1?: string|null,
     *     shippingAddress2?: string|null,
     *     shippingAddress3?: string|null,
     *     shippingAddress4?: string|null,
     *     shippingCity?: string|null,
     *     shippingCountry?: string|null,
     *     shippingCounty?: string|null,
     *     shippingPostalCode?: string|null,
     *     shippingProvince?: string|null,
     *     shippingState?: string|null,
     *     state?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
