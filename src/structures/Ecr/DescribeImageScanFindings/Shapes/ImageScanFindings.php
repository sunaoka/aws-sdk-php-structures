<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $imageScanCompletedAt
 * @property \Aws\Api\DateTimeResult|null $vulnerabilitySourceUpdatedAt
 * @property array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int<0, max>>|null $findingSeverityCounts
 * @property list<ImageScanFinding>|null $findings
 * @property list<EnhancedImageScanFinding>|null $enhancedFindings
 */
class ImageScanFindings extends Shape
{
    /**
     * @param array{
     *     imageScanCompletedAt?: \Aws\Api\DateTimeResult|null,
     *     vulnerabilitySourceUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     findingSeverityCounts?: array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int<0, max>>|null,
     *     findings?: list<ImageScanFinding>|null,
     *     enhancedFindings?: list<EnhancedImageScanFinding>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
