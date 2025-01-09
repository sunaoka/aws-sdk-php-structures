<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeMetricsExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $prefix
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
