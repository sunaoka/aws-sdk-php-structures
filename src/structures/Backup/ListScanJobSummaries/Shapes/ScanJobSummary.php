<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $AccountId
 * @property 'CREATED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'RUNNING'|'FAILED'|'CANCELED'|'AGGREGATE_ALL'|'ANY'|null $State
 * @property string|null $ResourceType
 * @property int|null $Count
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'GUARDDUTY'|null $MalwareScanner
 * @property 'NO_THREATS_FOUND'|'THREATS_FOUND'|null $ScanResultStatus
 */
class ScanJobSummary extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     AccountId?: string|null,
     *     State?: 'CREATED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'RUNNING'|'FAILED'|'CANCELED'|'AGGREGATE_ALL'|'ANY'|null,
     *     ResourceType?: string|null,
     *     Count?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MalwareScanner?: 'GUARDDUTY'|null,
     *     ScanResultStatus?: 'NO_THREATS_FOUND'|'THREATS_FOUND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
