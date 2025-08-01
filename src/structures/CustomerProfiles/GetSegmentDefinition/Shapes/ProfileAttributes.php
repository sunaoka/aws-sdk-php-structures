<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfileDimension|null $AccountNumber
 * @property ExtraLengthValueProfileDimension|null $AdditionalInformation
 * @property ProfileDimension|null $FirstName
 * @property ProfileDimension|null $LastName
 * @property ProfileDimension|null $MiddleName
 * @property ProfileDimension|null $GenderString
 * @property ProfileDimension|null $PartyTypeString
 * @property DateDimension|null $BirthDate
 * @property ProfileDimension|null $PhoneNumber
 * @property ProfileDimension|null $BusinessName
 * @property ProfileDimension|null $BusinessPhoneNumber
 * @property ProfileDimension|null $HomePhoneNumber
 * @property ProfileDimension|null $MobilePhoneNumber
 * @property ProfileDimension|null $EmailAddress
 * @property ProfileDimension|null $PersonalEmailAddress
 * @property ProfileDimension|null $BusinessEmailAddress
 * @property AddressDimension|null $Address
 * @property AddressDimension|null $ShippingAddress
 * @property AddressDimension|null $MailingAddress
 * @property AddressDimension|null $BillingAddress
 * @property array<string, AttributeDimension>|null $Attributes
 * @property ProfileTypeDimension|null $ProfileType
 */
class ProfileAttributes extends Shape
{
    /**
     * @param array{
     *     AccountNumber?: ProfileDimension|null,
     *     AdditionalInformation?: ExtraLengthValueProfileDimension|null,
     *     FirstName?: ProfileDimension|null,
     *     LastName?: ProfileDimension|null,
     *     MiddleName?: ProfileDimension|null,
     *     GenderString?: ProfileDimension|null,
     *     PartyTypeString?: ProfileDimension|null,
     *     BirthDate?: DateDimension|null,
     *     PhoneNumber?: ProfileDimension|null,
     *     BusinessName?: ProfileDimension|null,
     *     BusinessPhoneNumber?: ProfileDimension|null,
     *     HomePhoneNumber?: ProfileDimension|null,
     *     MobilePhoneNumber?: ProfileDimension|null,
     *     EmailAddress?: ProfileDimension|null,
     *     PersonalEmailAddress?: ProfileDimension|null,
     *     BusinessEmailAddress?: ProfileDimension|null,
     *     Address?: AddressDimension|null,
     *     ShippingAddress?: AddressDimension|null,
     *     MailingAddress?: AddressDimension|null,
     *     BillingAddress?: AddressDimension|null,
     *     Attributes?: array<string, AttributeDimension>|null,
     *     ProfileType?: ProfileTypeDimension|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
