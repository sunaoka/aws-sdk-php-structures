<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamActionDefinition|null $IamActionDefinition
 * @property ScpActionDefinition|null $ScpActionDefinition
 * @property SsmActionDefinition|null $SsmActionDefinition
 */
class Definition extends Shape
{
    /**
     * @param array{
     *     IamActionDefinition?: IamActionDefinition|null,
     *     ScpActionDefinition?: ScpActionDefinition|null,
     *     SsmActionDefinition?: SsmActionDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
