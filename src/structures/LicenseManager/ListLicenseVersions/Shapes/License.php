<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LicenseArn
 * @property string|null $LicenseName
 * @property string|null $ProductName
 * @property string|null $ProductSKU
 * @property IssuerDetails|null $Issuer
 * @property string|null $HomeRegion
 * @property 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED'|null $Status
 * @property DatetimeRange|null $Validity
 * @property string|null $Beneficiary
 * @property list<Entitlement>|null $Entitlements
 * @property ConsumptionConfiguration|null $ConsumptionConfiguration
 * @property list<Metadata>|null $LicenseMetadata
 * @property string|null $CreateTime
 * @property string|null $Version
 */
class License extends Shape
{
    /**
     * @param array{
     *     LicenseArn?: string|null,
     *     LicenseName?: string|null,
     *     ProductName?: string|null,
     *     ProductSKU?: string|null,
     *     Issuer?: IssuerDetails|null,
     *     HomeRegion?: string|null,
     *     Status?: 'AVAILABLE'|'PENDING_AVAILABLE'|'DEACTIVATED'|'SUSPENDED'|'EXPIRED'|'PENDING_DELETE'|'DELETED'|null,
     *     Validity?: DatetimeRange|null,
     *     Beneficiary?: string|null,
     *     Entitlements?: list<Entitlement>|null,
     *     ConsumptionConfiguration?: ConsumptionConfiguration|null,
     *     LicenseMetadata?: list<Metadata>|null,
     *     CreateTime?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
