<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Href
 */
class AssetValue extends Shape
{
    /**
     * @param array{Href?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
