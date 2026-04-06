<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'TraceId'|'Event'|'Service'|null $TimeRangeType
 * @property bool|null $Sampling
 * @property Shapes\SamplingStrategy|null $SamplingStrategy
 * @property string|null $FilterExpression
 * @property string|null $NextToken
 */
class GetTraceSummariesRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     TimeRangeType?: 'TraceId'|'Event'|'Service'|null,
     *     Sampling?: bool|null,
     *     SamplingStrategy?: Shapes\SamplingStrategy|null,
     *     FilterExpression?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
