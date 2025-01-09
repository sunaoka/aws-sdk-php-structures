<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $layerHashes
 * @property list<StringFilter> $repositories
 * @property list<StringFilter> $resourceIds
 * @property 'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class ImageLayerAggregation extends Shape
{
    /**
     * @param array{
     *     layerHashes?: list<StringFilter>,
     *     repositories?: list<StringFilter>,
     *     resourceIds?: list<StringFilter>,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
