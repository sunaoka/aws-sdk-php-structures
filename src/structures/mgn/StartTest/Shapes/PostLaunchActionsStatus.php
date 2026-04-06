<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ssmAgentDiscoveryDatetime
 * @property list<JobPostLaunchActionsLaunchStatus>|null $postLaunchActionsLaunchStatusList
 */
class PostLaunchActionsStatus extends Shape
{
    /**
     * @param array{
     *     ssmAgentDiscoveryDatetime?: string|null,
     *     postLaunchActionsLaunchStatusList?: list<JobPostLaunchActionsLaunchStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
