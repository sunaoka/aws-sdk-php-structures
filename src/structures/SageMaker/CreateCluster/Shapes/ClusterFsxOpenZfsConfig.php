<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DnsName
 * @property string|null $MountPath
 */
class ClusterFsxOpenZfsConfig extends Shape
{
    /**
     * @param array{
     *     DnsName: string,
     *     MountPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
