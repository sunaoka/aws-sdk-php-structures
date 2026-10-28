<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GrantName
 * @property string $LicenseArn
 * @property list<string> $Principals
 * @property string $HomeRegion
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'|'ListReceivedLicenses'> $AllowedOperations
 * @property list<Shapes\Tag>|null $Tags
 * @property 'BuyerGrant'|'DelegateGrant'|null $GrantType
 * @property Shapes\Options|null $Options
 */
class CreateGrantRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     GrantName: string,
     *     LicenseArn: string,
     *     Principals: list<string>,
     *     HomeRegion: string,
     *     AllowedOperations: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'|'ListReceivedLicenses'>,
     *     Tags?: list<Shapes\Tag>|null,
     *     GrantType?: 'BuyerGrant'|'DelegateGrant'|null,
     *     Options?: Shapes\Options|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
