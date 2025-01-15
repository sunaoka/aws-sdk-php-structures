<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListConfigurationHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceGroupName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'INFO'|'WARN'|'ERROR'|null $EventStatus
 * @property int<1, 40>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 */
class ListConfigurationHistoryRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     EventStatus?: 'INFO'|'WARN'|'ERROR'|null,
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
