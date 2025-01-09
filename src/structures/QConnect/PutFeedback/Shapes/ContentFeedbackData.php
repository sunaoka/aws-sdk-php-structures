<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GenerativeContentFeedbackData $generativeContentFeedbackData
 */
class ContentFeedbackData extends Shape
{
    /**
     * @param array{generativeContentFeedbackData?: GenerativeContentFeedbackData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
