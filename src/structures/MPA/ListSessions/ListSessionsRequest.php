<?php

namespace Sunaoka\Aws\Structures\MPA\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApprovalTeamArn
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     ApprovalTeamArn: string,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
