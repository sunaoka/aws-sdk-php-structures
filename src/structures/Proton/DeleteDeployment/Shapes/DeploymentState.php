<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComponentState $component
 * @property EnvironmentState $environment
 * @property ServiceInstanceState $serviceInstance
 * @property ServicePipelineState $servicePipeline
 */
class DeploymentState extends Shape
{
    /**
     * @param array{
     *     component?: ComponentState,
     *     environment?: EnvironmentState,
     *     serviceInstance?: ServiceInstanceState,
     *     servicePipeline?: ServicePipelineState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
