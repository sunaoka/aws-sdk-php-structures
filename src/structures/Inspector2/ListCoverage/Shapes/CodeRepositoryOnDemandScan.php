<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastScannedCommitId
 * @property \Aws\Api\DateTimeResult|null $lastScanAt
 * @property ScanStatus|null $scanStatus
 */
class CodeRepositoryOnDemandScan extends Shape
{
    /**
     * @param array{
     *     lastScannedCommitId?: string|null,
     *     lastScanAt?: \Aws\Api\DateTimeResult|null,
     *     scanStatus?: ScanStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
