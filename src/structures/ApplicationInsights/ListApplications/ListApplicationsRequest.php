<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 40>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 40>|null,
     *     NextToken?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
