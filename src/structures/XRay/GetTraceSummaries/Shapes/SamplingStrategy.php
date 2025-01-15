<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PartialScan'|'FixedRate'|null $Name
 * @property double|null $Value
 */
class SamplingStrategy extends Shape
{
    /**
     * @param array{
     *     Name?: 'PartialScan'|'FixedRate'|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
