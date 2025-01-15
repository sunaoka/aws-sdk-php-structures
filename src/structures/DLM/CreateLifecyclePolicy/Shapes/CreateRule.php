<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUD'|'OUTPOST_LOCAL'|'LOCAL_ZONE'|null $Location
 * @property int<1, max>|null $Interval
 * @property 'HOURS'|null $IntervalUnit
 * @property list<string>|null $Times
 * @property string|null $CronExpression
 * @property list<Script>|null $Scripts
 */
class CreateRule extends Shape
{
    /**
     * @param array{
     *     Location?: 'CLOUD'|'OUTPOST_LOCAL'|'LOCAL_ZONE'|null,
     *     Interval?: int<1, max>|null,
     *     IntervalUnit?: 'HOURS'|null,
     *     Times?: list<string>|null,
     *     CronExpression?: string|null,
     *     Scripts?: list<Script>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
