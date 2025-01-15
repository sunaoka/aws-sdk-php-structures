<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListProblems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string|null $ResourceGroupName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, 40>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ComponentName
 * @property 'IGNORED'|'VISIBLE'|null $Visibility
 */
class ListProblemsRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ResourceGroupName?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 40>|null,
     *     NextToken?: string|null,
     *     ComponentName?: string|null,
     *     Visibility?: 'IGNORED'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
