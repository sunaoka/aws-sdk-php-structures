<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListContactFlowAliasesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
