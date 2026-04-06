<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetAlarmMuteRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AlarmNames
 */
class MuteTargets extends Shape
{
    /**
     * @param array{AlarmNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
