<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateFunctionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 * @property string|null $Name
 */
class UpdateFunctionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     FunctionDefinitionId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
