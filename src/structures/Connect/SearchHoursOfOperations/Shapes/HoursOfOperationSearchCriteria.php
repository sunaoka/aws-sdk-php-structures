<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HoursOfOperationSearchCriteria> $OrConditions
 * @property list<HoursOfOperationSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class HoursOfOperationSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<HoursOfOperationSearchCriteria>,
     *     AndConditions?: list<HoursOfOperationSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
