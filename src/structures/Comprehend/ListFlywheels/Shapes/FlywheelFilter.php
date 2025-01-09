<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 */
class FlywheelFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
