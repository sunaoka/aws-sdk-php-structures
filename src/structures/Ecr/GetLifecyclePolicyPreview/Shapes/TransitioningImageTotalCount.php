<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARCHIVE'|null $targetStorageClass
 * @property int<0, max>|null $imageTotalCount
 */
class TransitioningImageTotalCount extends Shape
{
    /**
     * @param array{
     *     targetStorageClass?: 'ARCHIVE'|null,
     *     imageTotalCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
