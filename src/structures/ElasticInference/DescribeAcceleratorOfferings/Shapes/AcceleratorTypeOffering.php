<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $acceleratorType
 * @property 'region'|'availability-zone'|'availability-zone-id'|null $locationType
 * @property string|null $location
 */
class AcceleratorTypeOffering extends Shape
{
    /**
     * @param array{
     *     acceleratorType?: string|null,
     *     locationType?: 'region'|'availability-zone'|'availability-zone-id'|null,
     *     location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
