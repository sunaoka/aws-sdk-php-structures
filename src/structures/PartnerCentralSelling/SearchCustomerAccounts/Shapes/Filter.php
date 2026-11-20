<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter>|null $AndAllFilters
 * @property list<Filter>|null $OrAllFilters
 * @property Filter|null $NotFilter
 * @property FilterCondition|null $EqualsTo
 * @property FilterCondition|null $ContainsAny
 * @property FilterCondition|null $ContainsAll
 * @property FilterCondition|null $GreaterThan
 * @property FilterCondition|null $GreaterThanOrEquals
 * @property FilterCondition|null $LessThan
 * @property FilterCondition|null $LessThanOrEquals
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     AndAllFilters?: list<Filter>|null,
     *     OrAllFilters?: list<Filter>|null,
     *     NotFilter?: Filter|null,
     *     EqualsTo?: FilterCondition|null,
     *     ContainsAny?: FilterCondition|null,
     *     ContainsAll?: FilterCondition|null,
     *     GreaterThan?: FilterCondition|null,
     *     GreaterThanOrEquals?: FilterCondition|null,
     *     LessThan?: FilterCondition|null,
     *     LessThanOrEquals?: FilterCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
