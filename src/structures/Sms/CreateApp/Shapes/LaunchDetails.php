<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $latestLaunchTime
 * @property string|null $stackName
 * @property string|null $stackId
 */
class LaunchDetails extends Shape
{
    /**
     * @param array{
     *     latestLaunchTime?: \Aws\Api\DateTimeResult|null,
     *     stackName?: string|null,
     *     stackId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
