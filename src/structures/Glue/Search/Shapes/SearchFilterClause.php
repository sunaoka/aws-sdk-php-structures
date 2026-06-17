<?php

namespace Sunaoka\Aws\Structures\Glue\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchFilterClause>|null $AndAllFilters
 * @property list<SearchFilterClause>|null $OrAnyFilters
 * @property SearchAttributeFilter|null $AttributeFilter
 * @property SearchMapFilter|null $MapFilter
 */
class SearchFilterClause extends Shape
{
    /**
     * @param array{
     *     AndAllFilters?: list<SearchFilterClause>|null,
     *     OrAnyFilters?: list<SearchFilterClause>|null,
     *     AttributeFilter?: SearchAttributeFilter|null,
     *     MapFilter?: SearchMapFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
