<?php

namespace Sunaoka\Aws\Structures\Connect\SearchViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ViewSearchCriteria>|null $OrConditions
 * @property list<ViewSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $ViewTypeCondition
 * @property 'PUBLISHED'|'SAVED'|null $ViewStatusCondition
 */
class ViewSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ViewSearchCriteria>|null,
     *     AndConditions?: list<ViewSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     ViewTypeCondition?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null,
     *     ViewStatusCondition?: 'PUBLISHED'|'SAVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
