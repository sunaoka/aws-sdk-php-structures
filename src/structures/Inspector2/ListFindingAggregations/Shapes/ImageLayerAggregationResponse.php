<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repository
 * @property string $resourceId
 * @property string $layerHash
 * @property string $accountId
 * @property SeverityCounts|null $severityCounts
 */
class ImageLayerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     repository: string,
     *     resourceId: string,
     *     layerHash: string,
     *     accountId: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
