<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DnsName
 * @property string $MountName
 * @property string|null $MountPath
 */
class ClusterFsxLustreConfig extends Shape
{
    /**
     * @param array{
     *     DnsName: string,
     *     MountName: string,
     *     MountPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
