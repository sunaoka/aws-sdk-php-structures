<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartClusterHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\InstanceGroupHealthCheckConfiguration> $DeepHealthCheckConfigurations
 */
class StartClusterHealthCheckRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     DeepHealthCheckConfigurations: list<Shapes\InstanceGroupHealthCheckConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
