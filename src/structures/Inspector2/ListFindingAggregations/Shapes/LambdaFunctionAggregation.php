<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $functionNames
 * @property list<StringFilter>|null $runtimes
 * @property list<MapFilter>|null $functionTags
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class LambdaFunctionAggregation extends Shape
{
    /**
     * @param array{
     *     resourceIds?: list<StringFilter>|null,
     *     functionNames?: list<StringFilter>|null,
     *     runtimes?: list<StringFilter>|null,
     *     functionTags?: list<MapFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
