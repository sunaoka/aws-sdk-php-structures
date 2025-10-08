<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructureUnallocatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CloudAutonomousVmClusterResourceDetails>|null $cloudAutonomousVmClusters
 * @property string|null $cloudExadataInfrastructureDisplayName
 * @property double|null $exadataStorageInTBs
 * @property string|null $cloudExadataInfrastructureId
 * @property int|null $localStorageInGBs
 * @property int|null $memoryInGBs
 * @property int|null $ocpus
 */
class CloudExadataInfrastructureUnallocatedResources extends Shape
{
    /**
     * @param array{
     *     cloudAutonomousVmClusters?: list<CloudAutonomousVmClusterResourceDetails>|null,
     *     cloudExadataInfrastructureDisplayName?: string|null,
     *     exadataStorageInTBs?: double|null,
     *     cloudExadataInfrastructureId?: string|null,
     *     localStorageInGBs?: int|null,
     *     memoryInGBs?: int|null,
     *     ocpus?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
