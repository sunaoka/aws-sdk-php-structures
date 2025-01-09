<?php

namespace Sunaoka\Aws\Structures\Sfn\ListActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $activityArn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class ActivityListItem extends Shape
{
    /**
     * @param array{
     *     activityArn: string,
     *     name: string,
     *     creationDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
