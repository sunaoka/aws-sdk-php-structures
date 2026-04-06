<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseName
 * @property string $ProductName
 * @property string $ProductSKU
 * @property Shapes\Issuer $Issuer
 * @property string $HomeRegion
 * @property Shapes\DatetimeRange $Validity
 * @property list<Shapes\Entitlement> $Entitlements
 * @property string $Beneficiary
 * @property Shapes\ConsumptionConfiguration $ConsumptionConfiguration
 * @property list<Shapes\Metadata>|null $LicenseMetadata
 * @property string $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseName: string,
     *     ProductName: string,
     *     ProductSKU: string,
     *     Issuer: Shapes\Issuer,
     *     HomeRegion: string,
     *     Validity: Shapes\DatetimeRange,
     *     Entitlements: list<Shapes\Entitlement>,
     *     Beneficiary: string,
     *     ConsumptionConfiguration: Shapes\ConsumptionConfiguration,
     *     LicenseMetadata?: list<Shapes\Metadata>|null,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
