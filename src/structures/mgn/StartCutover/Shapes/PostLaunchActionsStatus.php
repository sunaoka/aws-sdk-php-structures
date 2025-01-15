<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JobPostLaunchActionsLaunchStatus>|null $postLaunchActionsLaunchStatusList
 * @property string|null $ssmAgentDiscoveryDatetime
 */
class PostLaunchActionsStatus extends Shape
{
    /**
     * @param array{
     *     postLaunchActionsLaunchStatusList?: list<JobPostLaunchActionsLaunchStatus>|null,
     *     ssmAgentDiscoveryDatetime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
