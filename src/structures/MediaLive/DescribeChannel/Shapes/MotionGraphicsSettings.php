<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HtmlMotionGraphicsSettings $HtmlMotionGraphicsSettings
 */
class MotionGraphicsSettings extends Shape
{
    /**
     * @param array{HtmlMotionGraphicsSettings?: HtmlMotionGraphicsSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
