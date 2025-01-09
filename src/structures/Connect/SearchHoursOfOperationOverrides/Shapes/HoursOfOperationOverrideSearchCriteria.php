<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HoursOfOperationOverrideSearchCriteria> $OrConditions
 * @property list<HoursOfOperationOverrideSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 * @property DateCondition $DateCondition
 */
class HoursOfOperationOverrideSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<HoursOfOperationOverrideSearchCriteria>,
     *     AndConditions?: list<HoursOfOperationOverrideSearchCriteria>,
     *     StringCondition?: StringCondition,
     *     DateCondition?: DateCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
