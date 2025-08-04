<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string|null $AdditionalInformation
 * @property string|null $AccountNumber
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
 * @property Shapes\UpdateAddress|null $Address
 * @property Shapes\UpdateAddress|null $ShippingAddress
 * @property Shapes\UpdateAddress|null $MailingAddress
 * @property Shapes\UpdateAddress|null $BillingAddress
 * @property array<string, string>|null $Attributes
 * @property string|null $PartyTypeString
 * @property string|null $GenderString
 * @property 'ACCOUNT_PROFILE'|'PROFILE'|null $ProfileType
 * @property Shapes\EngagementPreferences|null $EngagementPreferences
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     AdditionalInformation?: string|null,
     *     AccountNumber?: string|null,
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
     *     Address?: Shapes\UpdateAddress|null,
     *     ShippingAddress?: Shapes\UpdateAddress|null,
     *     MailingAddress?: Shapes\UpdateAddress|null,
     *     BillingAddress?: Shapes\UpdateAddress|null,
     *     Attributes?: array<string, string>|null,
     *     PartyTypeString?: string|null,
     *     GenderString?: string|null,
     *     ProfileType?: 'ACCOUNT_PROFILE'|'PROFILE'|null,
     *     EngagementPreferences?: Shapes\EngagementPreferences|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
