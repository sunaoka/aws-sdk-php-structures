<?php

namespace Sunaoka\Aws\Structures\QConnect\PutFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HELPFUL'|'NOT_HELPFUL' $relevance
 */
class GenerativeContentFeedbackData extends Shape
{
    /**
     * @param array{relevance: 'HELPFUL'|'NOT_HELPFUL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
