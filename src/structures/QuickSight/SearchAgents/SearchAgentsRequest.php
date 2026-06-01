<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\AgentSearchFilter> $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchAgentsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\AgentSearchFilter>,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
