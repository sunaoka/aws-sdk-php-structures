<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionType
 * @property string $actionId
 */
class ActionIdentifier extends Shape
{
    /**
     * @param array{
     *     actionType: string,
     *     actionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
