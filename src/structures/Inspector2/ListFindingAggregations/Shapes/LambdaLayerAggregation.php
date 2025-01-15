<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $functionNames
 * @property list<StringFilter>|null $layerArns
 * @property list<StringFilter>|null $resourceIds
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class LambdaLayerAggregation extends Shape
{
    /**
     * @param array{
     *     functionNames?: list<StringFilter>|null,
     *     layerArns?: list<StringFilter>|null,
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
