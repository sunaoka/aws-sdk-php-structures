<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUPS_Request'|'Certificate' $Event
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 */
class WirelessGatewayEventLogOption extends Shape
{
    /**
     * @param array{
     *     Event: 'CUPS_Request'|'Certificate',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
