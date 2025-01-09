<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorVersionId
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE' $status
 * @property string $description
 * @property string $lastUpdatedTime
 */
class DetectorVersionSummary extends Shape
{
    /**
     * @param array{
     *     detectorVersionId?: string,
     *     status?: 'DRAFT'|'ACTIVE'|'INACTIVE',
     *     description?: string,
     *     lastUpdatedTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
