<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
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
 * @property Shapes\Address $Address
 * @property Shapes\Address $ShippingAddress
 * @property Shapes\Address $MailingAddress
 * @property Shapes\Address $BillingAddress
 * @property array<string, string> $Attributes
 * @property string $PartyTypeString
 * @property string $GenderString
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
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
     *     Address?: Shapes\Address,
     *     ShippingAddress?: Shapes\Address,
     *     MailingAddress?: Shapes\Address,
     *     BillingAddress?: Shapes\Address,
     *     Attributes?: array<string, string>,
     *     PartyTypeString?: string,
     *     GenderString?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
