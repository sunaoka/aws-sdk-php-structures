<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2'|'EBS'|'S3'|null $QuoteCapacityType
 * @property string|null $Unit
 * @property float|null $Quantity
 */
class QuoteCapacity extends Shape
{
    /**
     * @param array{
     *     QuoteCapacityType?: 'EC2'|'EBS'|'S3'|null,
     *     Unit?: string|null,
     *     Quantity?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
