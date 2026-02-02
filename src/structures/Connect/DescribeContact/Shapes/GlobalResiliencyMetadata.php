<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActiveRegion
 * @property string|null $OriginRegion
 * @property string|null $TrafficDistributionGroupId
 */
class GlobalResiliencyMetadata extends Shape
{
    /**
     * @param array{
     *     ActiveRegion?: string|null,
     *     OriginRegion?: string|null,
     *     TrafficDistributionGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
