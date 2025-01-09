<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PartialScan'|'FixedRate' $Name
 * @property double $Value
 */
class SamplingStrategy extends Shape
{
    /**
     * @param array{
     *     Name?: 'PartialScan'|'FixedRate',
     *     Value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
