<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructureUnallocatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cloudAutonomousVmClusterId
 * @property double|null $unallocatedAdbStorageInTBs
 */
class CloudAutonomousVmClusterResourceDetails extends Shape
{
    /**
     * @param array{
     *     cloudAutonomousVmClusterId?: string|null,
     *     unallocatedAdbStorageInTBs?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
