<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MotionImageInsertionFramerate|null $Framerate
 * @property string|null $Input
 * @property 'MOV'|'PNG'|null $InsertionMode
 * @property MotionImageInsertionOffset|null $Offset
 * @property 'ONCE'|'REPEAT'|null $Playback
 * @property string|null $StartTime
 */
class MotionImageInserter extends Shape
{
    /**
     * @param array{
     *     Framerate?: MotionImageInsertionFramerate|null,
     *     Input?: string|null,
     *     InsertionMode?: 'MOV'|'PNG'|null,
     *     Offset?: MotionImageInsertionOffset|null,
     *     Playback?: 'ONCE'|'REPEAT'|null,
     *     StartTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
