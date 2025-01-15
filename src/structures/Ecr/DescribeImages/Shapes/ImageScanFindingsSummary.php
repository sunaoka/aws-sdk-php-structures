<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $imageScanCompletedAt
 * @property \Aws\Api\DateTimeResult|null $vulnerabilitySourceUpdatedAt
 * @property array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int<0, max>>|null $findingSeverityCounts
 */
class ImageScanFindingsSummary extends Shape
{
    /**
     * @param array{
     *     imageScanCompletedAt?: \Aws\Api\DateTimeResult|null,
     *     vulnerabilitySourceUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     findingSeverityCounts?: array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
