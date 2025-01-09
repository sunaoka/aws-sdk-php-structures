<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 */
class DeleteFleetRequest extends Request
{
    /**
     * @param array{fleetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
