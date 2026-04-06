<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $projectNames
 * @property list<StringFilter>|null $providerTypes
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property list<StringFilter>|null $resourceIds
 */
class CodeRepositoryAggregation extends Shape
{
    /**
     * @param array{
     *     projectNames?: list<StringFilter>|null,
     *     providerTypes?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     resourceIds?: list<StringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
