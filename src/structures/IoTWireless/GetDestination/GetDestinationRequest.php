<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetDestinationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
