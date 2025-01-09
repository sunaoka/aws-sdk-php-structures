<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'CREATED'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY' $State
 * @property string $ResourceType
 * @property string $MessageCategory
 * @property 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS' $AggregationPeriod
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCopyJobSummariesRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     State?: 'CREATED'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY',
     *     ResourceType?: string,
     *     MessageCategory?: string,
     *     AggregationPeriod?: 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
