<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>> $Coordinates
 * @property string $Type
 */
class Geometry extends Shape
{
    /**
     * @param array{
     *     Coordinates: list<list<list<double>>>,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
