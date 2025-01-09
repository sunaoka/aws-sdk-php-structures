<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MotionImageInsertionFramerate $Framerate
 * @property string $Input
 * @property 'MOV'|'PNG' $InsertionMode
 * @property MotionImageInsertionOffset $Offset
 * @property 'ONCE'|'REPEAT' $Playback
 * @property string $StartTime
 */
class MotionImageInserter extends Shape
{
    /**
     * @param array{
     *     Framerate?: MotionImageInsertionFramerate,
     *     Input?: string,
     *     InsertionMode?: 'MOV'|'PNG',
     *     Offset?: MotionImageInsertionOffset,
     *     Playback?: 'ONCE'|'REPEAT',
     *     StartTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
