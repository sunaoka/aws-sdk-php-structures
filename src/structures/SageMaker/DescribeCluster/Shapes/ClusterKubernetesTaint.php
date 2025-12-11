<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string|null $Value
 * @property 'NoSchedule'|'PreferNoSchedule'|'NoExecute' $Effect
 */
class ClusterKubernetesTaint extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value?: string|null,
     *     Effect: 'NoSchedule'|'PreferNoSchedule'|'NoExecute'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
