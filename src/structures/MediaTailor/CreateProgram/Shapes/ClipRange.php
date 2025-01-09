<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EndOffsetMillis
 * @property int $StartOffsetMillis
 */
class ClipRange extends Shape
{
    /**
     * @param array{
     *     EndOffsetMillis?: int,
     *     StartOffsetMillis?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
