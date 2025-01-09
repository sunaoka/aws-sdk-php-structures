<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ProgramId
 */
class VideoSelectorProgramId extends Shape
{
    /**
     * @param array{ProgramId?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
