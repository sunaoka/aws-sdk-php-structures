<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 */
class DeleteContainerFleetRequest extends Request
{
    /**
     * @param array{FleetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
