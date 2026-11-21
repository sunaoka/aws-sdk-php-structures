<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmbeddedCaptionPositionSettings|null $Position
 * @property 'MANUAL'|'PASSTHROUGH'|null $StyleControl
 * @property int|null $CaptionServiceChannel
 * @property 'EMBEDDED_608_AND_708'|'EMBEDDED_608_ONLY'|'EMBEDDED_708_ONLY'|null $EmbeddedMode
 */
class EmbeddedDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Position?: EmbeddedCaptionPositionSettings|null,
     *     StyleControl?: 'MANUAL'|'PASSTHROUGH'|null,
     *     CaptionServiceChannel?: int|null,
     *     EmbeddedMode?: 'EMBEDDED_608_AND_708'|'EMBEDDED_608_ONLY'|'EMBEDDED_708_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
