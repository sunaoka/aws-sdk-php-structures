<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActionTypeDeclaration $actionType
 */
class UpdateActionTypeRequest extends Request
{
    /**
     * @param array{actionType: Shapes\ActionTypeDeclaration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
