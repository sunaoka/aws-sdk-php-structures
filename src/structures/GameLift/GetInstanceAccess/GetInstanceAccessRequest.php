<?php

namespace Sunaoka\Aws\Structures\GameLift\GetInstanceAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $InstanceId
 */
class GetInstanceAccessRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
