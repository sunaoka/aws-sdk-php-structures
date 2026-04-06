<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TAGGED'|'UNTAGGED'|'ANY'|null $tagStatus
 * @property 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|'ANY'|null $imageStatus
 */
class DescribeImagesFilter extends Shape
{
    /**
     * @param array{
     *     tagStatus?: 'TAGGED'|'UNTAGGED'|'ANY'|null,
     *     imageStatus?: 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|'ANY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
