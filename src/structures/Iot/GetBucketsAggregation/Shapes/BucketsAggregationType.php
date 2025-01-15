<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TermsAggregation|null $termsAggregation
 */
class BucketsAggregationType extends Shape
{
    /**
     * @param array{termsAggregation?: TermsAggregation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
