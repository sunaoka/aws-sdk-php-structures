<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LicenseArn
 * @property string $LicenseName
 * @property string $ProductName
 * @property string $ProductSKU
 * @property IssuerDetails $Issuer
 * @property string $HomeRegion
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED' $Status
 * @property DatetimeRange $Validity
 * @property string $Beneficiary
 * @property list<Entitlement> $Entitlements
 * @property ConsumptionConfiguration $ConsumptionConfiguration
 * @property list<Metadata> $LicenseMetadata
 * @property string $CreateTime
 * @property string $Version
 */
class License extends Shape
{
    /**
     * @param array{
     *     LicenseArn?: string,
     *     LicenseName?: string,
     *     ProductName?: string,
     *     ProductSKU?: string,
     *     Issuer?: IssuerDetails,
     *     HomeRegion?: string,
     *     Status?: 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED',
     *     Validity?: DatetimeRange,
     *     Beneficiary?: string,
     *     Entitlements?: list<Entitlement>,
     *     ConsumptionConfiguration?: ConsumptionConfiguration,
     *     LicenseMetadata?: list<Metadata>,
     *     CreateTime?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
