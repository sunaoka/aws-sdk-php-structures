<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TAGGED'|'UNTAGGED'|'ANY'|null $tagStatus
 */
class LifecyclePolicyPreviewFilter extends Shape
{
    /**
     * @param array{tagStatus?: 'TAGGED'|'UNTAGGED'|'ANY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
