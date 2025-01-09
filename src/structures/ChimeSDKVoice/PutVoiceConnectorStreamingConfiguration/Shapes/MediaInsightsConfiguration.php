<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Disabled
 * @property string $ConfigurationArn
 */
class MediaInsightsConfiguration extends Shape
{
    /**
     * @param array{
     *     Disabled?: bool,
     *     ConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
