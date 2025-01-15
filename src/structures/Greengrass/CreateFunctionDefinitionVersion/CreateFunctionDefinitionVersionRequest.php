<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\FunctionDefaultConfig|null $DefaultConfig
 * @property string $FunctionDefinitionId
 * @property list<Shapes\FunctionShape>|null $Functions
 */
class CreateFunctionDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     DefaultConfig?: Shapes\FunctionDefaultConfig|null,
     *     FunctionDefinitionId: string,
     *     Functions?: list<Shapes\FunctionShape>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
