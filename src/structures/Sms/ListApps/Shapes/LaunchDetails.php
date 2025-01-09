<?php

namespace Sunaoka\Aws\Structures\Sms\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $latestLaunchTime
 * @property string $stackName
 * @property string $stackId
 */
class LaunchDetails extends Shape
{
    /**
     * @param array{
     *     latestLaunchTime?: \Aws\Api\DateTimeResult,
     *     stackName?: string,
     *     stackId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
