<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteFunctionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 */
class DeleteFunctionDefinitionRequest extends Request
{
    /**
     * @param array{FunctionDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
