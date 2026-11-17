<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnifiedConversationalObject|null $object
 */
class UnifiedConversationalSource extends Shape
{
    /**
     * @param array{object?: UnifiedConversationalObject|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
