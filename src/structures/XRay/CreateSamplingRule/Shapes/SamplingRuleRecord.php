<?php

namespace Sunaoka\Aws\Structures\XRay\CreateSamplingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamplingRule|null $SamplingRule
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 */
class SamplingRuleRecord extends Shape
{
    /**
     * @param array{
     *     SamplingRule?: SamplingRule|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
