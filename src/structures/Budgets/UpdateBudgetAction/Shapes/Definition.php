<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamActionDefinition $IamActionDefinition
 * @property ScpActionDefinition $ScpActionDefinition
 * @property SsmActionDefinition $SsmActionDefinition
 */
class Definition extends Shape
{
    /**
     * @param array{
     *     IamActionDefinition?: IamActionDefinition,
     *     ScpActionDefinition?: ScpActionDefinition,
     *     SsmActionDefinition?: SsmActionDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
