<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ResetResourceLogLevel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property string $ResourceType
 */
class ResetResourceLogLevelRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
