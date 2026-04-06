<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hookTargetArn
 * @property string|null $roleArn
 * @property list<'RECONCILE_SERVICE'|'PRE_SCALE_UP'|'POST_SCALE_UP'|'TEST_TRAFFIC_SHIFT'|'POST_TEST_TRAFFIC_SHIFT'|'PRODUCTION_TRAFFIC_SHIFT'|'POST_PRODUCTION_TRAFFIC_SHIFT'>|null $lifecycleStages
 * @property HookDetails|null $hookDetails
 */
class DeploymentLifecycleHook extends Shape
{
    /**
     * @param array{
     *     hookTargetArn?: string|null,
     *     roleArn?: string|null,
     *     lifecycleStages?: list<'RECONCILE_SERVICE'|'PRE_SCALE_UP'|'POST_SCALE_UP'|'TEST_TRAFFIC_SHIFT'|'POST_TEST_TRAFFIC_SHIFT'|'PRODUCTION_TRAFFIC_SHIFT'|'POST_PRODUCTION_TRAFFIC_SHIFT'>|null,
     *     hookDetails?: HookDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
