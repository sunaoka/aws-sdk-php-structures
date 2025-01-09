<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $imageScanCompletedAt
 * @property \Aws\Api\DateTimeResult $vulnerabilitySourceUpdatedAt
 * @property array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int> $findingSeverityCounts
 */
class ImageScanFindingsSummary extends Shape
{
    /**
     * @param array{
     *     imageScanCompletedAt?: \Aws\Api\DateTimeResult,
     *     vulnerabilitySourceUpdatedAt?: \Aws\Api\DateTimeResult,
     *     findingSeverityCounts?: array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
