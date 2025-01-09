<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Column
 * @property 'avg'|'countDistinct'|'count'|'first'|'last'|'kurtosis'|'max'|'min'|'skewness'|'stddev_samp'|'stddev_pop'|'sum'|'sumDistinct'|'var_samp'|'var_pop' $AggFunc
 */
class AggregateOperation extends Shape
{
    /**
     * @param array{
     *     Column: list<string>,
     *     AggFunc: 'avg'|'countDistinct'|'count'|'first'|'last'|'kurtosis'|'max'|'min'|'skewness'|'stddev_samp'|'stddev_pop'|'sum'|'sumDistinct'|'var_samp'|'var_pop'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
