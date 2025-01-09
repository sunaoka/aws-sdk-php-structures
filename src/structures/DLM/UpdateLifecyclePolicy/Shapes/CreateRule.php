<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUD'|'OUTPOST_LOCAL'|'LOCAL_ZONE' $Location
 * @property int<1, max> $Interval
 * @property 'HOURS' $IntervalUnit
 * @property list<string> $Times
 * @property string $CronExpression
 * @property list<Script> $Scripts
 */
class CreateRule extends Shape
{
    /**
     * @param array{
     *     Location?: 'CLOUD'|'OUTPOST_LOCAL'|'LOCAL_ZONE',
     *     Interval?: int<1, max>,
     *     IntervalUnit?: 'HOURS',
     *     Times?: list<string>,
     *     CronExpression?: string,
     *     Scripts?: list<Script>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
