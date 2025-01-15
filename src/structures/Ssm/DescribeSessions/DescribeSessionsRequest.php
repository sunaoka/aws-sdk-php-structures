<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'History' $State
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\SessionFilter>|null $Filters
 */
class DescribeSessionsRequest extends Request
{
    /**
     * @param array{
     *     State: 'Active'|'History',
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\SessionFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
