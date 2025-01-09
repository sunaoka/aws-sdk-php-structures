<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $amount
 * @property string $currency
 * @property 'Hourly'|'Daily'|'Monthly'|'Yearly' $frequency
 */
class Cost extends Shape
{
    /**
     * @param array{
     *     amount: double,
     *     currency: string,
     *     frequency: 'Hourly'|'Daily'|'Monthly'|'Yearly'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
