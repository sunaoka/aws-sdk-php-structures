<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListRasterDataCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Maximum
 * @property float $Minimum
 * @property string $Name
 * @property string $Type
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Maximum?: float,
     *     Minimum?: float,
     *     Name: string,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
