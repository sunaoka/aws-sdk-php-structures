<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'ACTIVE'|'CLOSED'> $States
 * @property string $GroupARN
 * @property string $GroupName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetInsightSummariesRequest extends Request
{
    /**
     * @param array{
     *     States?: list<'ACTIVE'|'CLOSED'>,
     *     GroupARN?: string,
     *     GroupName?: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
