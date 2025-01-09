<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 */
class GetFunctionDefinitionRequest extends Request
{
    /**
     * @param array{FunctionDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
