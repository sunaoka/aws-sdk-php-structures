<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Disabled
 * @property string|null $ConfigurationArn
 */
class MediaInsightsConfiguration extends Shape
{
    /**
     * @param array{
     *     Disabled?: bool|null,
     *     ConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
