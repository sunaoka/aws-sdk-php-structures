<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileUrl
 * @property string|null $ThumbnailUrl
 * @property string|null $Height
 */
class RcsCarouselCardMedia extends Shape
{
    /**
     * @param array{
     *     FileUrl: string,
     *     ThumbnailUrl?: string|null,
     *     Height?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
