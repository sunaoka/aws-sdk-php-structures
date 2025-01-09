<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3650> $RetentionPeriodValue
 * @property 'DAYS' $RetentionPeriodUnit
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     RetentionPeriodValue: int<1, 3650>,
     *     RetentionPeriodUnit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
