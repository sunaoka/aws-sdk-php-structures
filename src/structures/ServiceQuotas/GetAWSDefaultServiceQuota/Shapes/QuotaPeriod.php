<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAWSDefaultServiceQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PeriodValue
 * @property 'MICROSECOND'|'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|null $PeriodUnit
 */
class QuotaPeriod extends Shape
{
    /**
     * @param array{
     *     PeriodValue?: int|null,
     *     PeriodUnit?: 'MICROSECOND'|'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
