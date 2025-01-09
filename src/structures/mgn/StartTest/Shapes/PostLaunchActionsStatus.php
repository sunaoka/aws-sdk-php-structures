<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JobPostLaunchActionsLaunchStatus> $postLaunchActionsLaunchStatusList
 * @property string $ssmAgentDiscoveryDatetime
 */
class PostLaunchActionsStatus extends Shape
{
    /**
     * @param array{
     *     postLaunchActionsLaunchStatusList?: list<JobPostLaunchActionsLaunchStatus>,
     *     ssmAgentDiscoveryDatetime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
