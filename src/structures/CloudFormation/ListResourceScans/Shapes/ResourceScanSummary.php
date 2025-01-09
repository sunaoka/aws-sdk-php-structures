<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceScanId
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETE'|'EXPIRED' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property double $PercentageCompleted
 */
class ResourceScanSummary extends Shape
{
    /**
     * @param array{
     *     ResourceScanId?: string,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'COMPLETE'|'EXPIRED',
     *     StatusReason?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     PercentageCompleted?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
