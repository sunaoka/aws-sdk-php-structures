<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metric
 * @property string $reason
 */
class CvssScoreAdjustment extends Shape
{
    /**
     * @param array{
     *     metric?: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
