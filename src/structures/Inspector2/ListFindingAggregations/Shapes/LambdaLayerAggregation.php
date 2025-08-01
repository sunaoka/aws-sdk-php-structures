<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $functionNames
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $layerArns
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class LambdaLayerAggregation extends Shape
{
    /**
     * @param array{
     *     functionNames?: list<StringFilter>|null,
     *     resourceIds?: list<StringFilter>|null,
     *     layerArns?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
