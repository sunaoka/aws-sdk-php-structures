<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RetentionPeriodValue
 * @property 'DAYS' $RetentionPeriodUnit
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     RetentionPeriodValue: int,
     *     RetentionPeriodUnit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
