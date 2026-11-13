<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudAutonomousVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudAutonomousVmClusterId
 * @property double|null $autonomousDataStorageSizeInTBs
 * @property int<0, max>|null $cpuCoreCountPerNode
 * @property string|null $description
 * @property string|null $displayName
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 * @property int<0, max>|null $totalContainerDatabases
 */
class UpdateCloudAutonomousVmClusterRequest extends Request
{
    /**
     * @param array{
     *     cloudAutonomousVmClusterId: string,
     *     autonomousDataStorageSizeInTBs?: double|null,
     *     cpuCoreCountPerNode?: int<0, max>|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null,
     *     totalContainerDatabases?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
