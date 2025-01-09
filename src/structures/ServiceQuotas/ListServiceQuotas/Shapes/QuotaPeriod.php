<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PeriodValue
 * @property 'MICROSECOND'|'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK' $PeriodUnit
 */
class QuotaPeriod extends Shape
{
    /**
     * @param array{
     *     PeriodValue?: int,
     *     PeriodUnit?: 'MICROSECOND'|'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
