<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codeReviewId
 * @property string|null $reason
 */
class DeleteCodeReviewFailure extends Shape
{
    /**
     * @param array{
     *     codeReviewId?: string|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
