<?php

namespace Sunaoka\Aws\Structures\Swf\ListActivityTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property 'REGISTERED'|'DEPRECATED' $status
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $deprecationDate
 */
class ActivityTypeInfo extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     status: 'REGISTERED'|'DEPRECATED',
     *     description?: string,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     deprecationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
