<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EC2ResourceDetails $EC2ResourceDetails
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{EC2ResourceDetails?: EC2ResourceDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
