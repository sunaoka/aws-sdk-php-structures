<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationSearchCriteria>|null $OrConditions
 * @property list<EvaluationSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property NumberCondition|null $NumberCondition
 * @property BooleanCondition|null $BooleanCondition
 * @property DateTimeCondition|null $DateTimeCondition
 * @property DecimalCondition|null $DecimalCondition
 */
class EvaluationSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<EvaluationSearchCriteria>|null,
     *     AndConditions?: list<EvaluationSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     NumberCondition?: NumberCondition|null,
     *     BooleanCondition?: BooleanCondition|null,
     *     DateTimeCondition?: DateTimeCondition|null,
     *     DecimalCondition?: DecimalCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
