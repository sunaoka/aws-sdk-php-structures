<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detectorVersionId
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE'|null $status
 * @property string|null $description
 * @property string|null $lastUpdatedTime
 */
class DetectorVersionSummary extends Shape
{
    /**
     * @param array{
     *     detectorVersionId?: string|null,
     *     status?: 'DRAFT'|'ACTIVE'|'INACTIVE'|null,
     *     description?: string|null,
     *     lastUpdatedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
