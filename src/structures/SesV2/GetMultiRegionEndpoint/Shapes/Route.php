<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMultiRegionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 */
class Route extends Shape
{
    /**
     * @param array{Region: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
