<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSetRefreshProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RefreshConfiguration|null $RefreshConfiguration
 * @property RefreshFailureConfiguration|null $FailureConfiguration
 */
class DataSetRefreshProperties extends Shape
{
    /**
     * @param array{
     *     RefreshConfiguration?: RefreshConfiguration|null,
     *     FailureConfiguration?: RefreshFailureConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
