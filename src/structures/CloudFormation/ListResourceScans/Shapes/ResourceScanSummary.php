<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceScanId
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETE'|'EXPIRED'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property double|null $PercentageCompleted
 */
class ResourceScanSummary extends Shape
{
    /**
     * @param array{
     *     ResourceScanId?: string|null,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'COMPLETE'|'EXPIRED'|null,
     *     StatusReason?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     PercentageCompleted?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
