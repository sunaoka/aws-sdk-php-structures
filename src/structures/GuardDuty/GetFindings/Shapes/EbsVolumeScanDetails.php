<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScanId
 * @property \Aws\Api\DateTimeResult $ScanStartedAt
 * @property \Aws\Api\DateTimeResult $ScanCompletedAt
 * @property string $TriggerFindingId
 * @property list<string> $Sources
 * @property ScanDetections $ScanDetections
 * @property 'GUARDDUTY_INITIATED'|'ON_DEMAND' $ScanType
 */
class EbsVolumeScanDetails extends Shape
{
    /**
     * @param array{
     *     ScanId?: string,
     *     ScanStartedAt?: \Aws\Api\DateTimeResult,
     *     ScanCompletedAt?: \Aws\Api\DateTimeResult,
     *     TriggerFindingId?: string,
     *     Sources?: list<string>,
     *     ScanDetections?: ScanDetections,
     *     ScanType?: 'GUARDDUTY_INITIATED'|'ON_DEMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
