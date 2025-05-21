<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 4> $CaptionChannel
 * @property string $LanguageCode
 */
class CmafIngestCaptionLanguageMapping extends Shape
{
    /**
     * @param array{
     *     CaptionChannel: int<1, 4>,
     *     LanguageCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
