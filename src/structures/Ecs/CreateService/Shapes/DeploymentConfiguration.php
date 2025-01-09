<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeploymentCircuitBreaker $deploymentCircuitBreaker
 * @property int $maximumPercent
 * @property int $minimumHealthyPercent
 * @property DeploymentAlarms $alarms
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     deploymentCircuitBreaker?: DeploymentCircuitBreaker,
     *     maximumPercent?: int,
     *     minimumHealthyPercent?: int,
     *     alarms?: DeploymentAlarms
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
