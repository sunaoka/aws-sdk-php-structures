<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TAGGED'|'UNTAGGED'|'ANY' $tagStatus
 */
class DescribeImagesFilter extends Shape
{
    /**
     * @param array{tagStatus?: 'TAGGED'|'UNTAGGED'|'ANY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
