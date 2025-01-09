<?php

namespace Sunaoka\Aws\Structures\GameLift\StopFleetActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<'AUTO_SCALING'> $Actions
 * @property string $Location
 */
class StopFleetActionsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Actions: list<'AUTO_SCALING'>,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
