<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSourceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $state
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null $previousState
 * @property string|null $reason
 */
class AlarmStateChangeDetail extends Shape
{
    /**
     * @param array{
     *     state: 'OK'|'ALARM'|'INSUFFICIENT_DATA',
     *     previousState?: 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
