<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxBuckets
 */
class TermsAggregation extends Shape
{
    /**
     * @param array{maxBuckets?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
