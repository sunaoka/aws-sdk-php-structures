<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AssetValue> $Assets
 * @property \Aws\Api\DateTimeResult $DateTime
 * @property Geometry $Geometry
 * @property string $Id
 * @property Properties $Properties
 */
class ItemSource extends Shape
{
    /**
     * @param array{
     *     Assets?: array<string, AssetValue>,
     *     DateTime: \Aws\Api\DateTimeResult,
     *     Geometry: Geometry,
     *     Id: string,
     *     Properties?: Properties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
