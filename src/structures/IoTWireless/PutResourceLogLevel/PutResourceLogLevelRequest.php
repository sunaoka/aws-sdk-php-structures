<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutResourceLogLevel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property string $ResourceType
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 */
class PutResourceLogLevelRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: string,
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
