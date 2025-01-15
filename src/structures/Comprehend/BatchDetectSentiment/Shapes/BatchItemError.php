<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class BatchItemError extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
