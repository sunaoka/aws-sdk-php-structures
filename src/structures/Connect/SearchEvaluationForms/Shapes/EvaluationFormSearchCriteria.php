<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEvaluationForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormSearchCriteria>|null $OrConditions
 * @property list<EvaluationFormSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property NumberCondition|null $NumberCondition
 * @property BooleanCondition|null $BooleanCondition
 * @property DateTimeCondition|null $DateTimeCondition
 */
class EvaluationFormSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<EvaluationFormSearchCriteria>|null,
     *     AndConditions?: list<EvaluationFormSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     NumberCondition?: NumberCondition|null,
     *     BooleanCondition?: BooleanCondition|null,
     *     DateTimeCondition?: DateTimeCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
