<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudAutonomousVmClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudAutonomousVmClusterId
 * @property string|null $cloudAutonomousVmClusterArn
 * @property string|null $odbNetworkId
 * @property string|null $odbNetworkArn
 * @property string|null $ociResourceAnchorName
 * @property float|null $percentProgress
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $cloudExadataInfrastructureId
 * @property string|null $cloudExadataInfrastructureArn
 * @property float|null $autonomousDataStoragePercentage
 * @property double|null $autonomousDataStorageSizeInTBs
 * @property double|null $availableAutonomousDataStorageSizeInTBs
 * @property int|null $availableContainerDatabases
 * @property float|null $availableCpus
 * @property 'ECPU'|'OCPU'|null $computeModel
 * @property int|null $cpuCoreCount
 * @property int|null $cpuCoreCountPerNode
 * @property float|null $cpuPercentage
 * @property double|null $dataStorageSizeInGBs
 * @property double|null $dataStorageSizeInTBs
 * @property int|null $dbNodeStorageSizeInGBs
 * @property list<string>|null $dbServers
 * @property string|null $description
 * @property string|null $domain
 * @property double|null $exadataStorageInTBsLowestScaledValue
 * @property string|null $hostname
 * @property string|null $ocid
 * @property string|null $ociUrl
 * @property bool|null $isMtlsEnabledVmCluster
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property MaintenanceWindow|null $maintenanceWindow
 * @property int|null $maxAcdsLowestScaledValue
 * @property int|null $memoryPerOracleComputeUnitInGBs
 * @property int|null $memorySizeInGBs
 * @property int|null $nodeCount
 * @property int|null $nonProvisionableAutonomousContainerDatabases
 * @property int|null $provisionableAutonomousContainerDatabases
 * @property int|null $provisionedAutonomousContainerDatabases
 * @property float|null $provisionedCpus
 * @property float|null $reclaimableCpus
 * @property float|null $reservedCpus
 * @property int|null $scanListenerPortNonTls
 * @property int|null $scanListenerPortTls
 * @property string|null $shape
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $timeDatabaseSslCertificateExpires
 * @property \Aws\Api\DateTimeResult|null $timeOrdsCertificateExpires
 * @property string|null $timeZone
 * @property int|null $totalContainerDatabases
 */
class CloudAutonomousVmClusterSummary extends Shape
{
    /**
     * @param array{
     *     cloudAutonomousVmClusterId: string,
     *     cloudAutonomousVmClusterArn?: string|null,
     *     odbNetworkId?: string|null,
     *     odbNetworkArn?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     percentProgress?: float|null,
     *     displayName?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     cloudExadataInfrastructureId?: string|null,
     *     cloudExadataInfrastructureArn?: string|null,
     *     autonomousDataStoragePercentage?: float|null,
     *     autonomousDataStorageSizeInTBs?: double|null,
     *     availableAutonomousDataStorageSizeInTBs?: double|null,
     *     availableContainerDatabases?: int|null,
     *     availableCpus?: float|null,
     *     computeModel?: 'ECPU'|'OCPU'|null,
     *     cpuCoreCount?: int|null,
     *     cpuCoreCountPerNode?: int|null,
     *     cpuPercentage?: float|null,
     *     dataStorageSizeInGBs?: double|null,
     *     dataStorageSizeInTBs?: double|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     dbServers?: list<string>|null,
     *     description?: string|null,
     *     domain?: string|null,
     *     exadataStorageInTBsLowestScaledValue?: double|null,
     *     hostname?: string|null,
     *     ocid?: string|null,
     *     ociUrl?: string|null,
     *     isMtlsEnabledVmCluster?: bool|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     maintenanceWindow?: MaintenanceWindow|null,
     *     maxAcdsLowestScaledValue?: int|null,
     *     memoryPerOracleComputeUnitInGBs?: int|null,
     *     memorySizeInGBs?: int|null,
     *     nodeCount?: int|null,
     *     nonProvisionableAutonomousContainerDatabases?: int|null,
     *     provisionableAutonomousContainerDatabases?: int|null,
     *     provisionedAutonomousContainerDatabases?: int|null,
     *     provisionedCpus?: float|null,
     *     reclaimableCpus?: float|null,
     *     reservedCpus?: float|null,
     *     scanListenerPortNonTls?: int|null,
     *     scanListenerPortTls?: int|null,
     *     shape?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     timeDatabaseSslCertificateExpires?: \Aws\Api\DateTimeResult|null,
     *     timeOrdsCertificateExpires?: \Aws\Api\DateTimeResult|null,
     *     timeZone?: string|null,
     *     totalContainerDatabases?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
