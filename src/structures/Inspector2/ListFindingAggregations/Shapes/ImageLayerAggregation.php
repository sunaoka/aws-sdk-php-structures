<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $layerHashes
 * @property list<StringFilter>|null $repositories
 * @property list<StringFilter>|null $resourceIds
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class ImageLayerAggregation extends Shape
{
    /**
     * @param array{
     *     layerHashes?: list<StringFilter>|null,
     *     repositories?: list<StringFilter>|null,
     *     resourceIds?: list<StringFilter>|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
