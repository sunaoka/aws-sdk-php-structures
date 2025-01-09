<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property string $AccountNumber
 * @property string $AdditionalInformation
 * @property 'INDIVIDUAL'|'BUSINESS'|'OTHER' $PartyType
 * @property string $BusinessName
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $BirthDate
 * @property 'MALE'|'FEMALE'|'UNSPECIFIED' $Gender
 * @property string $PhoneNumber
 * @property string $MobilePhoneNumber
 * @property string $HomePhoneNumber
 * @property string $BusinessPhoneNumber
 * @property string $EmailAddress
 * @property string $PersonalEmailAddress
 * @property string $BusinessEmailAddress
 * @property Address $Address
 * @property Address $ShippingAddress
 * @property Address $MailingAddress
 * @property Address $BillingAddress
 * @property array<string, string> $Attributes
 * @property list<FoundByKeyValue> $FoundByItems
 * @property string $PartyTypeString
 * @property string $GenderString
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string,
     *     AccountNumber?: string,
     *     AdditionalInformation?: string,
     *     PartyType?: 'INDIVIDUAL'|'BUSINESS'|'OTHER',
     *     BusinessName?: string,
     *     FirstName?: string,
     *     MiddleName?: string,
     *     LastName?: string,
     *     BirthDate?: string,
     *     Gender?: 'MALE'|'FEMALE'|'UNSPECIFIED',
     *     PhoneNumber?: string,
     *     MobilePhoneNumber?: string,
     *     HomePhoneNumber?: string,
     *     BusinessPhoneNumber?: string,
     *     EmailAddress?: string,
     *     PersonalEmailAddress?: string,
     *     BusinessEmailAddress?: string,
     *     Address?: Address,
     *     ShippingAddress?: Address,
     *     MailingAddress?: Address,
     *     BillingAddress?: Address,
     *     Attributes?: array<string, string>,
     *     FoundByItems?: list<FoundByKeyValue>,
     *     PartyTypeString?: string,
     *     GenderString?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
