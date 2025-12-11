<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $FailedScan
 * @property list<'MALWARE'>|null $Findings
 * @property \Aws\Api\DateTimeResult|null $LastComputed
 */
class AggregatedScanResult extends Shape
{
    /**
     * @param array{
     *     FailedScan?: bool|null,
     *     Findings?: list<'MALWARE'>|null,
     *     LastComputed?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
