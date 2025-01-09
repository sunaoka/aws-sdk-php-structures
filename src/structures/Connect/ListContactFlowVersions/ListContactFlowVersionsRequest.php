<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListContactFlowVersionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
