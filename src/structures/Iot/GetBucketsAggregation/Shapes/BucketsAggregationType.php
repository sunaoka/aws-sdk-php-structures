<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TermsAggregation $termsAggregation
 */
class BucketsAggregationType extends Shape
{
    /**
     * @param array{termsAggregation?: TermsAggregation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
