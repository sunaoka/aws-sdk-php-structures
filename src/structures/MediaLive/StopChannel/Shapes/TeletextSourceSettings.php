<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaptionRectangle|null $OutputRectangle
 * @property string|null $PageNumber
 */
class TeletextSourceSettings extends Shape
{
    /**
     * @param array{
     *     OutputRectangle?: CaptionRectangle|null,
     *     PageNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
