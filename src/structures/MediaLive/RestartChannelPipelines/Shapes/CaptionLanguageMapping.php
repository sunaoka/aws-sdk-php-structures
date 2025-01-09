<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CaptionChannel
 * @property string $LanguageCode
 * @property string $LanguageDescription
 */
class CaptionLanguageMapping extends Shape
{
    /**
     * @param array{
     *     CaptionChannel: int,
     *     LanguageCode: string,
     *     LanguageDescription: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
