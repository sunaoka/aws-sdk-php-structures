<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65536> $ProgramId
 */
class VideoSelectorProgramId extends Shape
{
    /**
     * @param array{ProgramId?: int<0, 65536>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
