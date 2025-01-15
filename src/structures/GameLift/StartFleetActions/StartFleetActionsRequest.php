<?php

namespace Sunaoka\Aws\Structures\GameLift\StartFleetActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<'AUTO_SCALING'> $Actions
 * @property string|null $Location
 */
class StartFleetActionsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Actions: list<'AUTO_SCALING'>,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
