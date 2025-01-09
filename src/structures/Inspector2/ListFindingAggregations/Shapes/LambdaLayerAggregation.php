<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $functionNames
 * @property list<StringFilter> $layerArns
 * @property list<StringFilter> $resourceIds
 * @property 'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class LambdaLayerAggregation extends Shape
{
    /**
     * @param array{
     *     functionNames?: list<StringFilter>,
     *     layerArns?: list<StringFilter>,
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
