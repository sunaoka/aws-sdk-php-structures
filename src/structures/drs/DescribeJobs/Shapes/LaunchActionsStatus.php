<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LaunchActionRun> $runs
 * @property string $ssmAgentDiscoveryDatetime
 */
class LaunchActionsStatus extends Shape
{
    /**
     * @param array{
     *     runs?: list<LaunchActionRun>,
     *     ssmAgentDiscoveryDatetime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
