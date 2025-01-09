<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CvssScoreDetails $cvss
 */
class ScoreDetails extends Shape
{
    /**
     * @param array{cvss?: CvssScoreDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
