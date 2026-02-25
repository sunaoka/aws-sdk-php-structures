<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetAlarmMuteRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property string $Duration
 * @property string|null $Timezone
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     Duration: string,
     *     Timezone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
