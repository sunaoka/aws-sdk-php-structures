<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardWidth
 * @property list<RcsCarouselCardContent> $CardContents
 */
class RcsCarousel extends Shape
{
    /**
     * @param array{
     *     CardWidth: string,
     *     CardContents: list<RcsCarouselCardContent>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
