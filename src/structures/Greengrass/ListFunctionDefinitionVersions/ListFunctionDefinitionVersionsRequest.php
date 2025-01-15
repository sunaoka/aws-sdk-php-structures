<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListFunctionDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionDefinitionId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListFunctionDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     FunctionDefinitionId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
