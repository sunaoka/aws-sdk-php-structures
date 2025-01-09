<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY' $State
 * @property string $ResourceType
 * @property 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS' $AggregationPeriod
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListRestoreJobSummariesRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTED'|'COMPLETED'|'FAILED'|'AGGREGATE_ALL'|'ANY',
     *     ResourceType?: string,
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
