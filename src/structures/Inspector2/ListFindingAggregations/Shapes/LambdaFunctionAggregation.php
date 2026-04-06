<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $functionNames
 * @property list<MapFilter>|null $functionTags
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $runtimes
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class LambdaFunctionAggregation extends Shape
{
    /**
     * @param array{
     *     functionNames?: list<StringFilter>|null,
     *     functionTags?: list<MapFilter>|null,
     *     resourceIds?: list<StringFilter>|null,
     *     runtimes?: list<StringFilter>|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
