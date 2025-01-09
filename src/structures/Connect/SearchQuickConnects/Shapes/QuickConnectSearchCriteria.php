<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuickConnectSearchCriteria> $OrConditions
 * @property list<QuickConnectSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class QuickConnectSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<QuickConnectSearchCriteria>,
     *     AndConditions?: list<QuickConnectSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
