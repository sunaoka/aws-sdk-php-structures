<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $MotionGraphicsInsertion
 * @property MotionGraphicsSettings $MotionGraphicsSettings
 */
class MotionGraphicsConfiguration extends Shape
{
    /**
     * @param array{
     *     MotionGraphicsInsertion?: 'DISABLED'|'ENABLED',
     *     MotionGraphicsSettings: MotionGraphicsSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
