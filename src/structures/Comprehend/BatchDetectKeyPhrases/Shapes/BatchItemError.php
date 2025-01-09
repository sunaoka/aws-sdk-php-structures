<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectKeyPhrases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchItemError extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
