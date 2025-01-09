<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'History' $State
 * @property int<1, 200> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\SessionFilter> $Filters
 */
class DescribeSessionsRequest extends Request
{
    /**
     * @param array{
     *     State: 'Active'|'History',
     *     MaxResults?: int<1, 200>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\SessionFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
