<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'ACTIVE'|'CLOSED'>|null $States
 * @property string|null $GroupARN
 * @property string|null $GroupName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetInsightSummariesRequest extends Request
{
    /**
     * @param array{
     *     States?: list<'ACTIVE'|'CLOSED'>|null,
     *     GroupARN?: string|null,
     *     GroupName?: string|null,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
