<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuickConnectSearchCriteria>|null $OrConditions
 * @property list<QuickConnectSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class QuickConnectSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<QuickConnectSearchCriteria>|null,
     *     AndConditions?: list<QuickConnectSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
