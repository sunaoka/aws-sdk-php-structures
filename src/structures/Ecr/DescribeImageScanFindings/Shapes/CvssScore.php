<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $baseScore
 * @property string|null $scoringVector
 * @property string|null $source
 * @property string|null $version
 */
class CvssScore extends Shape
{
    /**
     * @param array{
     *     baseScore?: double|null,
     *     scoringVector?: string|null,
     *     source?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
