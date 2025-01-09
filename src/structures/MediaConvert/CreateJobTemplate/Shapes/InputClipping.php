<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndTimecode
 * @property string $StartTimecode
 */
class InputClipping extends Shape
{
    /**
     * @param array{
     *     EndTimecode?: string,
     *     StartTimecode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
