<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY' $State
 * @property string $ResourceType
 * @property string $MessageCategory
 * @property 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS' $AggregationPeriod
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListBackupJobSummariesRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|'AGGREGATE_ALL'|'ANY',
     *     ResourceType?: string,
     *     MessageCategory?: string,
     *     AggregationPeriod?: 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS',
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
