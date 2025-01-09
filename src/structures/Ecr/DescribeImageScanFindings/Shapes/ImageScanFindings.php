<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $imageScanCompletedAt
 * @property \Aws\Api\DateTimeResult $vulnerabilitySourceUpdatedAt
 * @property array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int<0, max>> $findingSeverityCounts
 * @property list<ImageScanFinding> $findings
 * @property list<EnhancedImageScanFinding> $enhancedFindings
 */
class ImageScanFindings extends Shape
{
    /**
     * @param array{
     *     imageScanCompletedAt?: \Aws\Api\DateTimeResult,
     *     vulnerabilitySourceUpdatedAt?: \Aws\Api\DateTimeResult,
     *     findingSeverityCounts?: array<'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED', int<0, max>>,
     *     findings?: list<ImageScanFinding>,
     *     enhancedFindings?: list<EnhancedImageScanFinding>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
