<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 * @property string $FunctionDefinitionVersionId
 * @property string $NextToken
 */
class GetFunctionDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     FunctionDefinitionId: string,
     *     FunctionDefinitionVersionId: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
