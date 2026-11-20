<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OpportunitySearchFilter>|null $AndAllFilters
 * @property list<OpportunitySearchFilter>|null $OrAllFilters
 * @property OpportunitySearchFilter|null $NotFilter
 * @property OpportunitySearchPredicate|null $EqualsTo
 * @property OpportunitySearchPredicate|null $ContainsAny
 * @property OpportunitySearchPredicate|null $ContainsAll
 * @property OpportunitySearchPredicate|null $GreaterThan
 * @property OpportunitySearchPredicate|null $GreaterThanOrEquals
 * @property OpportunitySearchPredicate|null $LessThan
 * @property OpportunitySearchPredicate|null $LessThanOrEquals
 */
class OpportunitySearchFilter extends Shape
{
    /**
     * @param array{
     *     AndAllFilters?: list<OpportunitySearchFilter>|null,
     *     OrAllFilters?: list<OpportunitySearchFilter>|null,
     *     NotFilter?: OpportunitySearchFilter|null,
     *     EqualsTo?: OpportunitySearchPredicate|null,
     *     ContainsAny?: OpportunitySearchPredicate|null,
     *     ContainsAll?: OpportunitySearchPredicate|null,
     *     GreaterThan?: OpportunitySearchPredicate|null,
     *     GreaterThanOrEquals?: OpportunitySearchPredicate|null,
     *     LessThan?: OpportunitySearchPredicate|null,
     *     LessThanOrEquals?: OpportunitySearchPredicate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
