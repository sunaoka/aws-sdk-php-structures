<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfileDimension $AccountNumber
 * @property ExtraLengthValueProfileDimension $AdditionalInformation
 * @property ProfileDimension $FirstName
 * @property ProfileDimension $LastName
 * @property ProfileDimension $MiddleName
 * @property ProfileDimension $GenderString
 * @property ProfileDimension $PartyTypeString
 * @property DateDimension $BirthDate
 * @property ProfileDimension $PhoneNumber
 * @property ProfileDimension $BusinessName
 * @property ProfileDimension $BusinessPhoneNumber
 * @property ProfileDimension $HomePhoneNumber
 * @property ProfileDimension $MobilePhoneNumber
 * @property ProfileDimension $EmailAddress
 * @property ProfileDimension $PersonalEmailAddress
 * @property ProfileDimension $BusinessEmailAddress
 * @property AddressDimension $Address
 * @property AddressDimension $ShippingAddress
 * @property AddressDimension $MailingAddress
 * @property AddressDimension $BillingAddress
 * @property array<string, AttributeDimension> $Attributes
 */
class ProfileAttributes extends Shape
{
    /**
     * @param array{
     *     AccountNumber?: ProfileDimension,
     *     AdditionalInformation?: ExtraLengthValueProfileDimension,
     *     FirstName?: ProfileDimension,
     *     LastName?: ProfileDimension,
     *     MiddleName?: ProfileDimension,
     *     GenderString?: ProfileDimension,
     *     PartyTypeString?: ProfileDimension,
     *     BirthDate?: DateDimension,
     *     PhoneNumber?: ProfileDimension,
     *     BusinessName?: ProfileDimension,
     *     BusinessPhoneNumber?: ProfileDimension,
     *     HomePhoneNumber?: ProfileDimension,
     *     MobilePhoneNumber?: ProfileDimension,
     *     EmailAddress?: ProfileDimension,
     *     PersonalEmailAddress?: ProfileDimension,
     *     BusinessEmailAddress?: ProfileDimension,
     *     Address?: AddressDimension,
     *     ShippingAddress?: AddressDimension,
     *     MailingAddress?: AddressDimension,
     *     BillingAddress?: AddressDimension,
     *     Attributes?: array<string, AttributeDimension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
