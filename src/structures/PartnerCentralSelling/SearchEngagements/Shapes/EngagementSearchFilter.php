<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EngagementSearchFilter>|null $AndAllFilters
 * @property list<EngagementSearchFilter>|null $OrAllFilters
 * @property EngagementSearchFilter|null $NotFilter
 * @property EngagementSearchPredicate|null $EqualsTo
 * @property EngagementSearchPredicate|null $ContainsAny
 * @property EngagementSearchPredicate|null $ContainsAll
 * @property EngagementSearchPredicate|null $GreaterThan
 * @property EngagementSearchPredicate|null $GreaterThanOrEquals
 * @property EngagementSearchPredicate|null $LessThan
 * @property EngagementSearchPredicate|null $LessThanOrEquals
 */
class EngagementSearchFilter extends Shape
{
    /**
     * @param array{
     *     AndAllFilters?: list<EngagementSearchFilter>|null,
     *     OrAllFilters?: list<EngagementSearchFilter>|null,
     *     NotFilter?: EngagementSearchFilter|null,
     *     EqualsTo?: EngagementSearchPredicate|null,
     *     ContainsAny?: EngagementSearchPredicate|null,
     *     ContainsAll?: EngagementSearchPredicate|null,
     *     GreaterThan?: EngagementSearchPredicate|null,
     *     GreaterThanOrEquals?: EngagementSearchPredicate|null,
     *     LessThan?: EngagementSearchPredicate|null,
     *     LessThanOrEquals?: EngagementSearchPredicate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
