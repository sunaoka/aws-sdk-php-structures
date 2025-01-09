<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property 'ACTIVE'|'ARCHIVED' $ContactFlowModuleState
 */
class ListContactFlowModulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     ContactFlowModuleState?: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
