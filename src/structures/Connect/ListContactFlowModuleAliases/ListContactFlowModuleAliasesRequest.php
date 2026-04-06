<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModuleAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListContactFlowModuleAliasesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
