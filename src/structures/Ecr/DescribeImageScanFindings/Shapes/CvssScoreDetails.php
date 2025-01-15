<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CvssScoreAdjustment>|null $adjustments
 * @property double|null $score
 * @property string|null $scoreSource
 * @property string|null $scoringVector
 * @property string|null $version
 */
class CvssScoreDetails extends Shape
{
    /**
     * @param array{
     *     adjustments?: list<CvssScoreAdjustment>|null,
     *     score?: double|null,
     *     scoreSource?: string|null,
     *     scoringVector?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
