<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeActivityType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property 'REGISTERED'|'DEPRECATED' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult|null $deprecationDate
 */
class ActivityTypeInfo extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     status: 'REGISTERED'|'DEPRECATED',
     *     description?: string|null,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     deprecationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
