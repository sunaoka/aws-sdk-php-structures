<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $functionNames
 * @property list<MapFilter> $functionTags
 * @property list<StringFilter> $resourceIds
 * @property list<StringFilter> $runtimes
 * @property 'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class LambdaFunctionAggregation extends Shape
{
    /**
     * @param array{
     *     functionNames?: list<StringFilter>,
     *     functionTags?: list<MapFilter>,
     *     resourceIds?: list<StringFilter>,
     *     runtimes?: list<StringFilter>,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
