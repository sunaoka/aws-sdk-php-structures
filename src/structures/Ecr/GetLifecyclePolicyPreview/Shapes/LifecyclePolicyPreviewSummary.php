<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $expiringImageTotalCount
 */
class LifecyclePolicyPreviewSummary extends Shape
{
    /**
     * @param array{expiringImageTotalCount?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
