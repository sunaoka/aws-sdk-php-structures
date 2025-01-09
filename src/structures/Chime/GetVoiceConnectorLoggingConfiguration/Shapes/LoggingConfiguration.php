<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableSIPLogs
 * @property bool $EnableMediaMetricLogs
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableSIPLogs?: bool,
     *     EnableMediaMetricLogs?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
