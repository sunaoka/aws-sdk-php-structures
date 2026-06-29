<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RcsTextMessage|null $TextMessage
 * @property RcsFileMessage|null $FileMessage
 * @property RcsStandaloneCard|null $RichCard
 * @property RcsCarousel|null $Carousel
 */
class RcsContent extends Shape
{
    /**
     * @param array{
     *     TextMessage?: RcsTextMessage|null,
     *     FileMessage?: RcsFileMessage|null,
     *     RichCard?: RcsStandaloneCard|null,
     *     Carousel?: RcsCarousel|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
