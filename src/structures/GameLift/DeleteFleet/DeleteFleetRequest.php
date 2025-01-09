<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 */
class DeleteFleetRequest extends Request
{
    /**
     * @param array{FleetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
