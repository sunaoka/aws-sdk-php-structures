<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndTimecode
 * @property string|null $StartTimecode
 */
class InputClipping extends Shape
{
    /**
     * @param array{
     *     EndTimecode?: string|null,
     *     StartTimecode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
