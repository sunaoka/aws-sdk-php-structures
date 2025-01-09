<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\FunctionDefaultConfig $DefaultConfig
 * @property string $FunctionDefinitionId
 * @property list<Shapes\FunctionShape> $Functions
 */
class CreateFunctionDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     DefaultConfig?: Shapes\FunctionDefaultConfig,
     *     FunctionDefinitionId: string,
     *     Functions?: list<Shapes\FunctionShape>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
