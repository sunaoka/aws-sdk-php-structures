<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AccessBudget>|null $accessBudgets
 */
class PrivacyBudgets extends Shape
{
    /**
     * @param array{accessBudgets?: list<AccessBudget>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
