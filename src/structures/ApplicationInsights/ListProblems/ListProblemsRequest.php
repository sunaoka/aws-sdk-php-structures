<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListProblems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ResourceGroupName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ComponentName
 * @property 'IGNORED'|'VISIBLE' $Visibility
 */
class ListProblemsRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     ResourceGroupName?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ComponentName?: string,
     *     Visibility?: 'IGNORED'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
