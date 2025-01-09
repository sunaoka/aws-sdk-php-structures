<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $expiringImageTotalCount
 */
class LifecyclePolicyPreviewSummary extends Shape
{
    /**
     * @param array{expiringImageTotalCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
