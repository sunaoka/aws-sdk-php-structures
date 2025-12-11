<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseAssetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<LicenseAssetGroupConfiguration>|null $LicenseAssetGroupConfigurations
 * @property list<string> $AssociatedLicenseAssetRulesetARNs
 * @property list<LicenseAssetGroupProperty>|null $Properties
 * @property string $LicenseAssetGroupArn
 * @property 'ACTIVE'|'DISABLED'|'DELETED' $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $LatestUsageAnalysisTime
 * @property \Aws\Api\DateTimeResult|null $LatestResourceDiscoveryTime
 */
class LicenseAssetGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     LicenseAssetGroupConfigurations?: list<LicenseAssetGroupConfiguration>|null,
     *     AssociatedLicenseAssetRulesetARNs: list<string>,
     *     Properties?: list<LicenseAssetGroupProperty>|null,
     *     LicenseAssetGroupArn: string,
     *     Status: 'ACTIVE'|'DISABLED'|'DELETED',
     *     StatusMessage?: string|null,
     *     LatestUsageAnalysisTime?: \Aws\Api\DateTimeResult|null,
     *     LatestResourceDiscoveryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
