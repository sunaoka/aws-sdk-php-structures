<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HoursOfOperationSearchCriteria>|null $OrConditions
 * @property list<HoursOfOperationSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class HoursOfOperationSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<HoursOfOperationSearchCriteria>|null,
     *     AndConditions?: list<HoursOfOperationSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
