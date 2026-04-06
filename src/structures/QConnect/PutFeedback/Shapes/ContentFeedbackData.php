<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GenerativeContentFeedbackData|null $generativeContentFeedbackData
 */
class ContentFeedbackData extends Shape
{
    /**
     * @param array{generativeContentFeedbackData?: GenerativeContentFeedbackData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
