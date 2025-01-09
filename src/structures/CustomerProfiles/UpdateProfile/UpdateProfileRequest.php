<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string $AdditionalInformation
 * @property string $AccountNumber
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
 * @property Shapes\UpdateAddress $Address
 * @property Shapes\UpdateAddress $ShippingAddress
 * @property Shapes\UpdateAddress $MailingAddress
 * @property Shapes\UpdateAddress $BillingAddress
 * @property array<string, string> $Attributes
 * @property string $PartyTypeString
 * @property string $GenderString
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     AdditionalInformation?: string,
     *     AccountNumber?: string,
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
     *     Address?: Shapes\UpdateAddress,
     *     ShippingAddress?: Shapes\UpdateAddress,
     *     MailingAddress?: Shapes\UpdateAddress,
     *     BillingAddress?: Shapes\UpdateAddress,
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
