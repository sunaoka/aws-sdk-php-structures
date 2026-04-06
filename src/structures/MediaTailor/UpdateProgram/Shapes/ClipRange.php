<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EndOffsetMillis
 * @property int|null $StartOffsetMillis
 */
class ClipRange extends Shape
{
    /**
     * @param array{
     *     EndOffsetMillis?: int|null,
     *     StartOffsetMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
