<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FSxLustreConfig|null $CurrentFSxLustreConfig
 * @property FSxLustreConfig|null $DesiredFSxLustreConfig
 * @property 'DeleteIfNotUsed'|'Keep'|null $CurrentFSxLustreDeletionPolicy
 * @property 'DeleteIfNotUsed'|'Keep'|null $DesiredFSxLustreDeletionPolicy
 */
class ClusterSharedEnvironmentConfigDetails extends Shape
{
    /**
     * @param array{
     *     CurrentFSxLustreConfig?: FSxLustreConfig|null,
     *     DesiredFSxLustreConfig?: FSxLustreConfig|null,
     *     CurrentFSxLustreDeletionPolicy?: 'DeleteIfNotUsed'|'Keep'|null,
     *     DesiredFSxLustreDeletionPolicy?: 'DeleteIfNotUsed'|'Keep'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
