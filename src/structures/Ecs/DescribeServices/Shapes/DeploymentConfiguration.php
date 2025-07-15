<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeploymentCircuitBreaker|null $deploymentCircuitBreaker
 * @property int|null $maximumPercent
 * @property int|null $minimumHealthyPercent
 * @property DeploymentAlarms|null $alarms
 * @property 'ROLLING'|'BLUE_GREEN'|null $strategy
 * @property int|null $bakeTimeInMinutes
 * @property list<DeploymentLifecycleHook>|null $lifecycleHooks
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     deploymentCircuitBreaker?: DeploymentCircuitBreaker|null,
     *     maximumPercent?: int|null,
     *     minimumHealthyPercent?: int|null,
     *     alarms?: DeploymentAlarms|null,
     *     strategy?: 'ROLLING'|'BLUE_GREEN'|null,
     *     bakeTimeInMinutes?: int|null,
     *     lifecycleHooks?: list<DeploymentLifecycleHook>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
