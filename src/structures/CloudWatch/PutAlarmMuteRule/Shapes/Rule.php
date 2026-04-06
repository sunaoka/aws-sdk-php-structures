<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAlarmMuteRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Schedule $Schedule
 */
class Rule extends Shape
{
    /**
     * @param array{Schedule: Schedule} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
