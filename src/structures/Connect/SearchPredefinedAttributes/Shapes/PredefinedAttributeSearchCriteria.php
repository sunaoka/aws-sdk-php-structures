<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPredefinedAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredefinedAttributeSearchCriteria>|null $OrConditions
 * @property list<PredefinedAttributeSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class PredefinedAttributeSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<PredefinedAttributeSearchCriteria>|null,
     *     AndConditions?: list<PredefinedAttributeSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
