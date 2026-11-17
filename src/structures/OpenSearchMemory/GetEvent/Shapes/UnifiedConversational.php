<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnifiedConversationalSource $source
 */
class UnifiedConversational extends Shape
{
    /**
     * @param array{source: UnifiedConversationalSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
