<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $FleetId
 */
class DeleteScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     FleetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
