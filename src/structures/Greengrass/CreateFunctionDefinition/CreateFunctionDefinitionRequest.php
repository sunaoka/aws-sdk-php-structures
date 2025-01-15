<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\FunctionDefinitionVersion|null $InitialVersion
 * @property string|null $Name
 * @property array<string, string>|null $tags
 */
class CreateFunctionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     InitialVersion?: Shapes\FunctionDefinitionVersion|null,
     *     Name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
