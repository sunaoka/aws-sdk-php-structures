<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeploymentCircuitBreaker|null $deploymentCircuitBreaker
 * @property int|null $maximumPercent
 * @property int|null $minimumHealthyPercent
 * @property DeploymentAlarms|null $alarms
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     deploymentCircuitBreaker?: DeploymentCircuitBreaker|null,
     *     maximumPercent?: int|null,
     *     minimumHealthyPercent?: int|null,
     *     alarms?: DeploymentAlarms|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
