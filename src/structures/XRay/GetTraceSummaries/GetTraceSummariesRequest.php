<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'TraceId'|'Event'|'Service' $TimeRangeType
 * @property bool $Sampling
 * @property Shapes\SamplingStrategy $SamplingStrategy
 * @property string $FilterExpression
 * @property string $NextToken
 */
class GetTraceSummariesRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     TimeRangeType?: 'TraceId'|'Event'|'Service',
     *     Sampling?: bool,
     *     SamplingStrategy?: Shapes\SamplingStrategy,
     *     FilterExpression?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
