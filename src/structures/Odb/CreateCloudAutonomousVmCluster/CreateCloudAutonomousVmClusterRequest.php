<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudAutonomousVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property string $odbNetworkId
 * @property string $displayName
 * @property string|null $clientToken
 * @property double $autonomousDataStorageSizeInTBs
 * @property int<0, max> $cpuCoreCountPerNode
 * @property list<string>|null $dbServers
 * @property string|null $description
 * @property bool|null $isMtlsEnabledVmCluster
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 * @property int<0, max> $memoryPerOracleComputeUnitInGBs
 * @property int<1024, 8999>|null $scanListenerPortNonTls
 * @property int<1024, 8999>|null $scanListenerPortTls
 * @property array<string, string>|null $tags
 * @property string|null $timeZone
 * @property int<0, max> $totalContainerDatabases
 */
class CreateCloudAutonomousVmClusterRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     odbNetworkId: string,
     *     displayName: string,
     *     clientToken?: string|null,
     *     autonomousDataStorageSizeInTBs: double,
     *     cpuCoreCountPerNode: int<0, max>,
     *     dbServers?: list<string>|null,
     *     description?: string|null,
     *     isMtlsEnabledVmCluster?: bool|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null,
     *     memoryPerOracleComputeUnitInGBs: int<0, max>,
     *     scanListenerPortNonTls?: int<1024, 8999>|null,
     *     scanListenerPortTls?: int<1024, 8999>|null,
     *     tags?: array<string, string>|null,
     *     timeZone?: string|null,
     *     totalContainerDatabases: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
