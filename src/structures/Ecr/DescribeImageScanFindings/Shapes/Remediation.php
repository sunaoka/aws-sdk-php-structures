<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Recommendation|null $recommendation
 */
class Remediation extends Shape
{
    /**
     * @param array{recommendation?: Recommendation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
