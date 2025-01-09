<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\MergeProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountNumber
 * @property string $AdditionalInformation
 * @property string $PartyType
 * @property string $BusinessName
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $BirthDate
 * @property string $Gender
 * @property string $PhoneNumber
 * @property string $MobilePhoneNumber
 * @property string $HomePhoneNumber
 * @property string $BusinessPhoneNumber
 * @property string $EmailAddress
 * @property string $PersonalEmailAddress
 * @property string $BusinessEmailAddress
 * @property string $Address
 * @property string $ShippingAddress
 * @property string $MailingAddress
 * @property string $BillingAddress
 * @property array<string, string> $Attributes
 */
class FieldSourceProfileIds extends Shape
{
    /**
     * @param array{
     *     AccountNumber?: string,
     *     AdditionalInformation?: string,
     *     PartyType?: string,
     *     BusinessName?: string,
     *     FirstName?: string,
     *     MiddleName?: string,
     *     LastName?: string,
     *     BirthDate?: string,
     *     Gender?: string,
     *     PhoneNumber?: string,
     *     MobilePhoneNumber?: string,
     *     HomePhoneNumber?: string,
     *     BusinessPhoneNumber?: string,
     *     EmailAddress?: string,
     *     PersonalEmailAddress?: string,
     *     BusinessEmailAddress?: string,
     *     Address?: string,
     *     ShippingAddress?: string,
     *     MailingAddress?: string,
     *     BillingAddress?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
