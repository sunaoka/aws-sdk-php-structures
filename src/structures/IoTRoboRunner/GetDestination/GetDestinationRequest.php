<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\GetDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetDestinationRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
