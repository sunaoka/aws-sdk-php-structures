<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property 'Stereo'|'Mono'|null $AudioChannels
 * @property string|null $AudioSampleRate
 */
class LiveConnectorRTMPConfiguration extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     AudioChannels?: 'Stereo'|'Mono'|null,
     *     AudioSampleRate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
