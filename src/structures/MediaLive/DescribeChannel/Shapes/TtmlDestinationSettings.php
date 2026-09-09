<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSTHROUGH'|'USE_CONFIGURED'|'MANUAL'|null $StyleControl
 * @property TextCaptionPositionSettings|null $Position
 */
class TtmlDestinationSettings extends Shape
{
    /**
     * @param array{
     *     StyleControl?: 'PASSTHROUGH'|'USE_CONFIGURED'|'MANUAL'|null,
     *     Position?: TextCaptionPositionSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
