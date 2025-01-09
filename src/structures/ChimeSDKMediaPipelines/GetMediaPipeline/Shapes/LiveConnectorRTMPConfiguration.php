<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property 'Stereo'|'Mono' $AudioChannels
 * @property string $AudioSampleRate
 */
class LiveConnectorRTMPConfiguration extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     AudioChannels?: 'Stereo'|'Mono',
     *     AudioSampleRate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
