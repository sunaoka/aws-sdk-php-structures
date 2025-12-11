<?php

namespace Sunaoka\Aws\Structures\Connect\SearchDataTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataTableSearchCriteria>|null $OrConditions
 * @property list<DataTableSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class DataTableSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<DataTableSearchCriteria>|null,
     *     AndConditions?: list<DataTableSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
