<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $MotionGraphicsInsertion
 * @property MotionGraphicsSettings $MotionGraphicsSettings
 */
class MotionGraphicsConfiguration extends Shape
{
    /**
     * @param array{
     *     MotionGraphicsInsertion?: 'DISABLED'|'ENABLED'|null,
     *     MotionGraphicsSettings: MotionGraphicsSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
