<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $repositories
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $layerHashes
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class ImageLayerAggregation extends Shape
{
    /**
     * @param array{
     *     repositories?: list<StringFilter>|null,
     *     resourceIds?: list<StringFilter>|null,
     *     layerHashes?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
