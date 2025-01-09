<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateMultiRegionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 */
class RouteDetails extends Shape
{
    /**
     * @param array{Region: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
