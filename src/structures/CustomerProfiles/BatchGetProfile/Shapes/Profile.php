<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileId
 * @property string|null $AccountNumber
 * @property string|null $AdditionalInformation
 * @property 'INDIVIDUAL'|'BUSINESS'|'OTHER'|null $PartyType
 * @property string|null $BusinessName
 * @property string|null $FirstName
 * @property string|null $MiddleName
 * @property string|null $LastName
 * @property string|null $BirthDate
 * @property 'MALE'|'FEMALE'|'UNSPECIFIED'|null $Gender
 * @property string|null $PhoneNumber
 * @property string|null $MobilePhoneNumber
 * @property string|null $HomePhoneNumber
 * @property string|null $BusinessPhoneNumber
 * @property string|null $EmailAddress
 * @property string|null $PersonalEmailAddress
 * @property string|null $BusinessEmailAddress
 * @property Address|null $Address
 * @property Address|null $ShippingAddress
 * @property Address|null $MailingAddress
 * @property Address|null $BillingAddress
 * @property array<string, string>|null $Attributes
 * @property list<FoundByKeyValue>|null $FoundByItems
 * @property string|null $PartyTypeString
 * @property string|null $GenderString
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string|null,
     *     AccountNumber?: string|null,
     *     AdditionalInformation?: string|null,
     *     PartyType?: 'INDIVIDUAL'|'BUSINESS'|'OTHER'|null,
     *     BusinessName?: string|null,
     *     FirstName?: string|null,
     *     MiddleName?: string|null,
     *     LastName?: string|null,
     *     BirthDate?: string|null,
     *     Gender?: 'MALE'|'FEMALE'|'UNSPECIFIED'|null,
     *     PhoneNumber?: string|null,
     *     MobilePhoneNumber?: string|null,
     *     HomePhoneNumber?: string|null,
     *     BusinessPhoneNumber?: string|null,
     *     EmailAddress?: string|null,
     *     PersonalEmailAddress?: string|null,
     *     BusinessEmailAddress?: string|null,
     *     Address?: Address|null,
     *     ShippingAddress?: Address|null,
     *     MailingAddress?: Address|null,
     *     BillingAddress?: Address|null,
     *     Attributes?: array<string, string>|null,
     *     FoundByItems?: list<FoundByKeyValue>|null,
     *     PartyTypeString?: string|null,
     *     GenderString?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
