<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableSIPLogs
 * @property bool|null $EnableMediaMetricLogs
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableSIPLogs?: bool|null,
     *     EnableMediaMetricLogs?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
