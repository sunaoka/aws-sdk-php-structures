<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enable
 * @property bool $rollback
 * @property bool|null $resetOnHealthyTask
 * @property ThresholdConfiguration|null $thresholdConfiguration
 */
class DeploymentCircuitBreaker extends Shape
{
    /**
     * @param array{
     *     enable: bool,
     *     rollback: bool,
     *     resetOnHealthyTask?: bool|null,
     *     thresholdConfiguration?: ThresholdConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
