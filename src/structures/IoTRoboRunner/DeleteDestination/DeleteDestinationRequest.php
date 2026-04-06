<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\DeleteDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteDestinationRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
