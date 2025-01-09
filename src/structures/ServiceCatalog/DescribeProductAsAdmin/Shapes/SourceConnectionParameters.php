<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeStarParameters $CodeStar
 */
class SourceConnectionParameters extends Shape
{
    /**
     * @param array{CodeStar?: CodeStarParameters} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
