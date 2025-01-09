<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 40> $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 40>,
     *     NextToken?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
