<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EC2ResourceUtilization|null $EC2ResourceUtilization
 */
class ResourceUtilization extends Shape
{
    /**
     * @param array{EC2ResourceUtilization?: EC2ResourceUtilization|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
