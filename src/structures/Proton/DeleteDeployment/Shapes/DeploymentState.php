<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComponentState|null $component
 * @property EnvironmentState|null $environment
 * @property ServiceInstanceState|null $serviceInstance
 * @property ServicePipelineState|null $servicePipeline
 */
class DeploymentState extends Shape
{
    /**
     * @param array{
     *     component?: ComponentState|null,
     *     environment?: EnvironmentState|null,
     *     serviceInstance?: ServiceInstanceState|null,
     *     servicePipeline?: ServicePipelineState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
