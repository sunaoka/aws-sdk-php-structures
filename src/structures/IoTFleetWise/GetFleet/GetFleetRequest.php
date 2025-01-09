<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 */
class GetFleetRequest extends Request
{
    /**
     * @param array{fleetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
