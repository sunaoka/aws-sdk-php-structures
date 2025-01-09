<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\FunctionDefinitionVersion $InitialVersion
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateFunctionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     InitialVersion?: Shapes\FunctionDefinitionVersion,
     *     Name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
