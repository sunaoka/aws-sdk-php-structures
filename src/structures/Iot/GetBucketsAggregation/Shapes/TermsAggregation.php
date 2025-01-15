<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $maxBuckets
 */
class TermsAggregation extends Shape
{
    /**
     * @param array{maxBuckets?: int<1, 10000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
