<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $RunBackTestMode
 */
class BackTestConfiguration extends Shape
{
    /**
     * @param array{RunBackTestMode: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
