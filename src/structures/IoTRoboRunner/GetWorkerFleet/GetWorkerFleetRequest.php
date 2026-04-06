<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\GetWorkerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetWorkerFleetRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
