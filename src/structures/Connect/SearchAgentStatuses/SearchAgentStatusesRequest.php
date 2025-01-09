<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\AgentStatusSearchFilter $SearchFilter
 * @property Shapes\AgentStatusSearchCriteria $SearchCriteria
 */
class SearchAgentStatusesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchFilter?: Shapes\AgentStatusSearchFilter,
     *     SearchCriteria?: Shapes\AgentStatusSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
