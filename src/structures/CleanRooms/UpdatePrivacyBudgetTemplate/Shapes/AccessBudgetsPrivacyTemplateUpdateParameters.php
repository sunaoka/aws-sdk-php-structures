<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BudgetParameter> $budgetParameters
 */
class AccessBudgetsPrivacyTemplateUpdateParameters extends Shape
{
    /**
     * @param array{budgetParameters: list<BudgetParameter>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
