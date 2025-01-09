<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8766000> $Period
 * @property 'HOURS'|'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $PeriodType
 */
class ValidityPeriod extends Shape
{
    /**
     * @param array{
     *     Period: int<1, 8766000>,
     *     PeriodType: 'HOURS'|'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
