<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListConfigurationHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'INFO'|'WARN'|'ERROR' $EventStatus
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 */
class ListConfigurationHistoryRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     EventStatus?: 'INFO'|'WARN'|'ERROR',
     *     MaxResults?: int,
     *     NextToken?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
