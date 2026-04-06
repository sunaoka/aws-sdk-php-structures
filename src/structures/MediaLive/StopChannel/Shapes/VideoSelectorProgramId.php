<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65536>|null $ProgramId
 */
class VideoSelectorProgramId extends Shape
{
    /**
     * @param array{ProgramId?: int<0, 65536>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
