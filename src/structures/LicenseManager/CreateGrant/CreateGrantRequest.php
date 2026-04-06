<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GrantName
 * @property string $LicenseArn
 * @property list<string> $Principals
 * @property string $HomeRegion
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'> $AllowedOperations
 * @property list<Shapes\Tag>|null $Tags
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
     *     AllowedOperations: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
