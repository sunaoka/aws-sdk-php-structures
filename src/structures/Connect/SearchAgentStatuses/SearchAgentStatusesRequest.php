<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\AgentStatusSearchFilter|null $SearchFilter
 * @property Shapes\AgentStatusSearchCriteria|null $SearchCriteria
 */
class SearchAgentStatusesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\AgentStatusSearchFilter|null,
     *     SearchCriteria?: Shapes\AgentStatusSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
