<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HoursOfOperationOverrideSearchCriteria>|null $OrConditions
 * @property list<HoursOfOperationOverrideSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property DateCondition|null $DateCondition
 */
class HoursOfOperationOverrideSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<HoursOfOperationOverrideSearchCriteria>|null,
     *     AndConditions?: list<HoursOfOperationOverrideSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     DateCondition?: DateCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
