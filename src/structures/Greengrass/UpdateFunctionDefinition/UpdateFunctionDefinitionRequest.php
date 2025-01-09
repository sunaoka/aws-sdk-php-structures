<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateFunctionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 * @property string $Name
 */
class UpdateFunctionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     FunctionDefinitionId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
