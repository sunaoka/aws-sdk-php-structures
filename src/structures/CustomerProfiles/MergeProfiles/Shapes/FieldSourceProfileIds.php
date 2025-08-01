<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\MergeProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountNumber
 * @property string|null $AdditionalInformation
 * @property string|null $PartyType
 * @property string|null $BusinessName
 * @property string|null $FirstName
 * @property string|null $MiddleName
 * @property string|null $LastName
 * @property string|null $BirthDate
 * @property string|null $Gender
 * @property string|null $PhoneNumber
 * @property string|null $MobilePhoneNumber
 * @property string|null $HomePhoneNumber
 * @property string|null $BusinessPhoneNumber
 * @property string|null $EmailAddress
 * @property string|null $PersonalEmailAddress
 * @property string|null $BusinessEmailAddress
 * @property string|null $Address
 * @property string|null $ShippingAddress
 * @property string|null $MailingAddress
 * @property string|null $BillingAddress
 * @property array<string, string>|null $Attributes
 * @property string|null $ProfileType
 * @property string|null $EngagementPreferences
 */
class FieldSourceProfileIds extends Shape
{
    /**
     * @param array{
     *     AccountNumber?: string|null,
     *     AdditionalInformation?: string|null,
     *     PartyType?: string|null,
     *     BusinessName?: string|null,
     *     FirstName?: string|null,
     *     MiddleName?: string|null,
     *     LastName?: string|null,
     *     BirthDate?: string|null,
     *     Gender?: string|null,
     *     PhoneNumber?: string|null,
     *     MobilePhoneNumber?: string|null,
     *     HomePhoneNumber?: string|null,
     *     BusinessPhoneNumber?: string|null,
     *     EmailAddress?: string|null,
     *     PersonalEmailAddress?: string|null,
     *     BusinessEmailAddress?: string|null,
     *     Address?: string|null,
     *     ShippingAddress?: string|null,
     *     MailingAddress?: string|null,
     *     BillingAddress?: string|null,
     *     Attributes?: array<string, string>|null,
     *     ProfileType?: string|null,
     *     EngagementPreferences?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
