<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $layerHash
 * @property string $repository
 * @property string $resourceId
 * @property SeverityCounts $severityCounts
 */
class ImageLayerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     layerHash: string,
     *     repository: string,
     *     resourceId: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
