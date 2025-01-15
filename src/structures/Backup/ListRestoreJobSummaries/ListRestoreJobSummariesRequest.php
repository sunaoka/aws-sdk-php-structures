<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY'|null $State
 * @property string|null $ResourceType
 * @property 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS'|null $AggregationPeriod
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRestoreJobSummariesRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY'|null,
     *     ResourceType?: string|null,
     *     AggregationPeriod?: 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
