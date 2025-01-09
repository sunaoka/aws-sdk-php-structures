<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Fuota' $Event
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 */
class FuotaTaskEventLogOption extends Shape
{
    /**
     * @param array{
     *     Event: 'Fuota',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
