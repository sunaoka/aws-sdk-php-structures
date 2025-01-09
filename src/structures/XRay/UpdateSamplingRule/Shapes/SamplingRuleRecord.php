<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateSamplingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamplingRule $SamplingRule
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 */
class SamplingRuleRecord extends Shape
{
    /**
     * @param array{
     *     SamplingRule?: SamplingRule,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     ModifiedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
