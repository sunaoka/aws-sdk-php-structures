<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartClusterHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupName
 * @property list<string>|null $InstanceIds
 * @property list<'InstanceStress'|'InstanceConnectivity'> $DeepHealthChecks
 */
class InstanceGroupHealthCheckConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceGroupName: string,
     *     InstanceIds?: list<string>|null,
     *     DeepHealthChecks: list<'InstanceStress'|'InstanceConnectivity'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
