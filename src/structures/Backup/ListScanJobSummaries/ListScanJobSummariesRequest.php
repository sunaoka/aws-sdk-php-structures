<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string|null $ResourceType
 * @property 'GUARDDUTY'|null $MalwareScanner
 * @property 'NO_THREATS_FOUND'|'THREATS_FOUND'|null $ScanResultStatus
 * @property 'CREATED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'RUNNING'|'FAILED'|'CANCELED'|'AGGREGATE_ALL'|'ANY'|null $State
 * @property 'ONE_DAY'|'SEVEN_DAYS'|'FOURTEEN_DAYS'|null $AggregationPeriod
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListScanJobSummariesRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ResourceType?: string|null,
     *     MalwareScanner?: 'GUARDDUTY'|null,
     *     ScanResultStatus?: 'NO_THREATS_FOUND'|'THREATS_FOUND'|null,
     *     State?: 'CREATED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'RUNNING'|'FAILED'|'CANCELED'|'AGGREGATE_ALL'|'ANY'|null,
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
