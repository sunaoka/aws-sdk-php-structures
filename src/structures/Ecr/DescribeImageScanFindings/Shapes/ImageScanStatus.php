<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'UNSUPPORTED_IMAGE'|'ACTIVE'|'PENDING'|'SCAN_ELIGIBILITY_EXPIRED'|'FINDINGS_UNAVAILABLE'|null $status
 * @property string|null $description
 */
class ImageScanStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'UNSUPPORTED_IMAGE'|'ACTIVE'|'PENDING'|'SCAN_ELIGIBILITY_EXPIRED'|'FINDINGS_UNAVAILABLE'|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
