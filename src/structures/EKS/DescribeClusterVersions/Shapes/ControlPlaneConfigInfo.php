<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubeApiServerVersionConfig|null $kubeApiServerConfig
 * @property KubeSchedulerVersionConfig|null $kubeSchedulerConfig
 * @property KubeControllerManagerVersionConfig|null $kubeControllerManagerConfig
 */
class ControlPlaneConfigInfo extends Shape
{
    /**
     * @param array{
     *     kubeApiServerConfig?: KubeApiServerVersionConfig|null,
     *     kubeSchedulerConfig?: KubeSchedulerVersionConfig|null,
     *     kubeControllerManagerConfig?: KubeControllerManagerVersionConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
