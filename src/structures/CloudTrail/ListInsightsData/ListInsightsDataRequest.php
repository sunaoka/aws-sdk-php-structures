<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightSource
 * @property 'InsightsEvents' $DataType
 * @property array<'EventId'|'EventName'|'EventSource', string>|null $Dimensions
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInsightsDataRequest extends Request
{
    /**
     * @param array{
     *     InsightSource: string,
     *     DataType: 'InsightsEvents',
     *     Dimensions?: array<'EventId'|'EventName'|'EventSource', string>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
