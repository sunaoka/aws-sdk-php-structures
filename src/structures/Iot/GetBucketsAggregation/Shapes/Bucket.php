<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $keyValue
 * @property int $count
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     keyValue?: string,
     *     count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
