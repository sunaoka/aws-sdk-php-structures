<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 */
class GetDeviceCommandRequest extends Request
{
    /**
     * @param array{commandId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
