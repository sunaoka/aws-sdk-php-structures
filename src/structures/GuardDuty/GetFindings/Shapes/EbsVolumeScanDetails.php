<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ScanId
 * @property \Aws\Api\DateTimeResult|null $ScanStartedAt
 * @property \Aws\Api\DateTimeResult|null $ScanCompletedAt
 * @property string|null $TriggerFindingId
 * @property list<string>|null $Sources
 * @property ScanDetections|null $ScanDetections
 * @property 'GUARDDUTY_INITIATED'|'ON_DEMAND'|null $ScanType
 */
class EbsVolumeScanDetails extends Shape
{
    /**
     * @param array{
     *     ScanId?: string|null,
     *     ScanStartedAt?: \Aws\Api\DateTimeResult|null,
     *     ScanCompletedAt?: \Aws\Api\DateTimeResult|null,
     *     TriggerFindingId?: string|null,
     *     Sources?: list<string>|null,
     *     ScanDetections?: ScanDetections|null,
     *     ScanType?: 'GUARDDUTY_INITIATED'|'ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
