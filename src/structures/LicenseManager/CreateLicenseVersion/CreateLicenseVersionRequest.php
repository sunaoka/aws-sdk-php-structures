<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property string $LicenseName
 * @property string $ProductName
 * @property Shapes\Issuer $Issuer
 * @property string $HomeRegion
 * @property Shapes\DatetimeRange $Validity
 * @property list<Shapes\Metadata>|null $LicenseMetadata
 * @property list<Shapes\Entitlement> $Entitlements
 * @property Shapes\ConsumptionConfiguration $ConsumptionConfiguration
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED' $Status
 * @property string $ClientToken
 * @property string|null $SourceVersion
 */
class CreateLicenseVersionRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     LicenseName: string,
     *     ProductName: string,
     *     Issuer: Shapes\Issuer,
     *     HomeRegion: string,
     *     Validity: Shapes\DatetimeRange,
     *     LicenseMetadata?: list<Shapes\Metadata>|null,
     *     Entitlements: list<Shapes\Entitlement>,
     *     ConsumptionConfiguration: Shapes\ConsumptionConfiguration,
     *     Status: 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED',
     *     ClientToken: string,
     *     SourceVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
