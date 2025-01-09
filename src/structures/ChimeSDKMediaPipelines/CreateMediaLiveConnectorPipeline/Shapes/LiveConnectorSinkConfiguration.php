<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RTMP' $SinkType
 * @property LiveConnectorRTMPConfiguration $RTMPConfiguration
 */
class LiveConnectorSinkConfiguration extends Shape
{
    /**
     * @param array{
     *     SinkType: 'RTMP',
     *     RTMPConfiguration: LiveConnectorRTMPConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
