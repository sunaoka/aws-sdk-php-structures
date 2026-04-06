<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeMetricsExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $prefix
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
