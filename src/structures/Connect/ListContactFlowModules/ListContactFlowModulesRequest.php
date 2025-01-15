<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property 'ACTIVE'|'ARCHIVED'|null $ContactFlowModuleState
 */
class ListContactFlowModulesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ContactFlowModuleState?: 'ACTIVE'|'ARCHIVED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
