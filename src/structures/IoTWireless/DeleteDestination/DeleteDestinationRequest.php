<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteDestinationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
