<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
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
 * @property Shapes\Address|null $Address
 * @property Shapes\Address|null $ShippingAddress
 * @property Shapes\Address|null $MailingAddress
 * @property Shapes\Address|null $BillingAddress
 * @property array<string, string>|null $Attributes
 * @property string|null $PartyTypeString
 * @property string|null $GenderString
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
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
     *     Address?: Shapes\Address|null,
     *     ShippingAddress?: Shapes\Address|null,
     *     MailingAddress?: Shapes\Address|null,
     *     BillingAddress?: Shapes\Address|null,
     *     Attributes?: array<string, string>|null,
     *     PartyTypeString?: string|null,
     *     GenderString?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
