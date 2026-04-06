<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageText
 */
class SuggestedMessageDataDetails extends Shape
{
    /**
     * @param array{messageText: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
