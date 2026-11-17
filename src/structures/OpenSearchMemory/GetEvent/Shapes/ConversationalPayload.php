<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnifiedConversational|null $unified
 */
class ConversationalPayload extends Shape
{
    /**
     * @param array{unified?: UnifiedConversational|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
