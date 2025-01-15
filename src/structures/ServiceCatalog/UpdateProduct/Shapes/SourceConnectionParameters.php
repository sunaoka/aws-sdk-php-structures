<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeStarParameters|null $CodeStar
 */
class SourceConnectionParameters extends Shape
{
    /**
     * @param array{CodeStar?: CodeStarParameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
