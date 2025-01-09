<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaptionRectangle $OutputRectangle
 * @property string $PageNumber
 */
class TeletextSourceSettings extends Shape
{
    /**
     * @param array{
     *     OutputRectangle?: CaptionRectangle,
     *     PageNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
