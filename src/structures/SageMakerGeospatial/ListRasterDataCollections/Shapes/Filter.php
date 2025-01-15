<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListRasterDataCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Maximum
 * @property float|null $Minimum
 * @property string $Name
 * @property string $Type
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Maximum?: float|null,
     *     Minimum?: float|null,
     *     Name: string,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
