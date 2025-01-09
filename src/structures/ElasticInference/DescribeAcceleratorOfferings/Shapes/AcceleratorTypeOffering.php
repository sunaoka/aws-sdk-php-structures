<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $acceleratorType
 * @property 'region'|'availability-zone'|'availability-zone-id' $locationType
 * @property string $location
 */
class AcceleratorTypeOffering extends Shape
{
    /**
     * @param array{
     *     acceleratorType?: string,
     *     locationType?: 'region'|'availability-zone'|'availability-zone-id',
     *     location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
