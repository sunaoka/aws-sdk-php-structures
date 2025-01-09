<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $PersistentBufferEnabled
 */
class BufferOptions extends Shape
{
    /**
     * @param array{PersistentBufferEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
