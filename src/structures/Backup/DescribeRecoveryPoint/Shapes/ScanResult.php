<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GUARDDUTY'|null $MalwareScanner
 * @property 'COMPLETED'|'COMPLETED_WITH_ISSUES'|'FAILED'|'CANCELED'|null $ScanJobState
 * @property \Aws\Api\DateTimeResult|null $LastScanTimestamp
 * @property list<'MALWARE'>|null $Findings
 */
class ScanResult extends Shape
{
    /**
     * @param array{
     *     MalwareScanner?: 'GUARDDUTY'|null,
     *     ScanJobState?: 'COMPLETED'|'COMPLETED_WITH_ISSUES'|'FAILED'|'CANCELED'|null,
     *     LastScanTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Findings?: list<'MALWARE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
