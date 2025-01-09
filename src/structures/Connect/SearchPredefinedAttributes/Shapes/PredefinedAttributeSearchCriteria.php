<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPredefinedAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredefinedAttributeSearchCriteria> $OrConditions
 * @property list<PredefinedAttributeSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class PredefinedAttributeSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<PredefinedAttributeSearchCriteria>,
     *     AndConditions?: list<PredefinedAttributeSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
