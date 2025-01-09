<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LicenseConfigurationId
 * @property string $LicenseConfigurationArn
 * @property string $Name
 * @property string $Description
 * @property 'vCPU'|'Instance'|'Core'|'Socket' $LicenseCountingType
 * @property list<string> $LicenseRules
 * @property int $LicenseCount
 * @property bool $LicenseCountHardLimit
 * @property bool $DisassociateWhenNotFound
 * @property int $ConsumedLicenses
 * @property string $Status
 * @property string $OwnerAccountId
 * @property list<ConsumedLicenseSummary> $ConsumedLicenseSummaryList
 * @property list<ManagedResourceSummary> $ManagedResourceSummaryList
 * @property list<ProductInformation> $ProductInformationList
 * @property AutomatedDiscoveryInformation $AutomatedDiscoveryInformation
 */
class LicenseConfiguration extends Shape
{
    /**
     * @param array{
     *     LicenseConfigurationId?: string,
     *     LicenseConfigurationArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     LicenseCountingType?: 'vCPU'|'Instance'|'Core'|'Socket',
     *     LicenseRules?: list<string>,
     *     LicenseCount?: int,
     *     LicenseCountHardLimit?: bool,
     *     DisassociateWhenNotFound?: bool,
     *     ConsumedLicenses?: int,
     *     Status?: string,
     *     OwnerAccountId?: string,
     *     ConsumedLicenseSummaryList?: list<ConsumedLicenseSummary>,
     *     ManagedResourceSummaryList?: list<ManagedResourceSummary>,
     *     ProductInformationList?: list<ProductInformation>,
     *     AutomatedDiscoveryInformation?: AutomatedDiscoveryInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
