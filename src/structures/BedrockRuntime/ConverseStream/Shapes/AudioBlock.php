<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'mp3'|'opus'|'wav'|'aac'|'flac'|'mp4'|'ogg'|'mkv'|'mka'|'x-aac'|'m4a'|'mpeg'|'mpga'|'pcm'|'webm' $format
 * @property AudioSource $source
 * @property ErrorBlock|null $error
 */
class AudioBlock extends Shape
{
    /**
     * @param array{
     *     format: 'mp3'|'opus'|'wav'|'aac'|'flac'|'mp4'|'ogg'|'mkv'|'mka'|'x-aac'|'m4a'|'mpeg'|'mpga'|'pcm'|'webm',
     *     source: AudioSource,
     *     error?: ErrorBlock|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
