<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAccounts
 */
class ActionTypePermissions extends Shape
{
    /**
     * @param array{allowedAccounts: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
