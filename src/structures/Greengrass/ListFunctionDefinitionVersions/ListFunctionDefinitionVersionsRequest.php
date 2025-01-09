<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListFunctionDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListFunctionDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     FunctionDefinitionId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
