<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LicenseConfigurationId
 * @property string|null $LicenseConfigurationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'vCPU'|'Instance'|'Core'|'Socket'|null $LicenseCountingType
 * @property list<string>|null $LicenseRules
 * @property int|null $LicenseCount
 * @property bool|null $LicenseCountHardLimit
 * @property bool|null $DisassociateWhenNotFound
 * @property int|null $ConsumedLicenses
 * @property string|null $Status
 * @property string|null $OwnerAccountId
 * @property list<ConsumedLicenseSummary>|null $ConsumedLicenseSummaryList
 * @property list<ManagedResourceSummary>|null $ManagedResourceSummaryList
 * @property list<ProductInformation>|null $ProductInformationList
 * @property AutomatedDiscoveryInformation|null $AutomatedDiscoveryInformation
 */
class LicenseConfiguration extends Shape
{
    /**
     * @param array{
     *     LicenseConfigurationId?: string|null,
     *     LicenseConfigurationArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LicenseCountingType?: 'vCPU'|'Instance'|'Core'|'Socket'|null,
     *     LicenseRules?: list<string>|null,
     *     LicenseCount?: int|null,
     *     LicenseCountHardLimit?: bool|null,
     *     DisassociateWhenNotFound?: bool|null,
     *     ConsumedLicenses?: int|null,
     *     Status?: string|null,
     *     OwnerAccountId?: string|null,
     *     ConsumedLicenseSummaryList?: list<ConsumedLicenseSummary>|null,
     *     ManagedResourceSummaryList?: list<ManagedResourceSummary>|null,
     *     ProductInformationList?: list<ProductInformation>|null,
     *     AutomatedDiscoveryInformation?: AutomatedDiscoveryInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
