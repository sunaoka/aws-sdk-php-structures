<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_LAMBDA'|'PAUSE'|null $targetType
 * @property string|null $hookTargetArn
 * @property string|null $roleArn
 * @property list<'RECONCILE_SERVICE'|'PRE_SCALE_UP'|'POST_SCALE_UP'|'TEST_TRAFFIC_SHIFT'|'POST_TEST_TRAFFIC_SHIFT'|'PRE_PRODUCTION_TRAFFIC_SHIFT'|'PRODUCTION_TRAFFIC_SHIFT'|'POST_PRODUCTION_TRAFFIC_SHIFT'>|null $lifecycleStages
 * @property HookDetails|null $hookDetails
 * @property DeploymentLifecycleHookTimeoutConfiguration|null $timeoutConfiguration
 */
class DeploymentLifecycleHook extends Shape
{
    /**
     * @param array{
     *     targetType?: 'AWS_LAMBDA'|'PAUSE'|null,
     *     hookTargetArn?: string|null,
     *     roleArn?: string|null,
     *     lifecycleStages?: list<'RECONCILE_SERVICE'|'PRE_SCALE_UP'|'POST_SCALE_UP'|'TEST_TRAFFIC_SHIFT'|'POST_TEST_TRAFFIC_SHIFT'|'PRE_PRODUCTION_TRAFFIC_SHIFT'|'PRODUCTION_TRAFFIC_SHIFT'|'POST_PRODUCTION_TRAFFIC_SHIFT'>|null,
     *     hookDetails?: HookDetails|null,
     *     timeoutConfiguration?: DeploymentLifecycleHookTimeoutConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
