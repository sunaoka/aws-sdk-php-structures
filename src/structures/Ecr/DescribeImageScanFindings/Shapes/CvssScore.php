<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $baseScore
 * @property string $scoringVector
 * @property string $source
 * @property string $version
 */
class CvssScore extends Shape
{
    /**
     * @param array{
     *     baseScore?: double,
     *     scoringVector?: string,
     *     source?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
