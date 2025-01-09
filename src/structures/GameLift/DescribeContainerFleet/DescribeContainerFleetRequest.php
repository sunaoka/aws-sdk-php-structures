<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 */
class DescribeContainerFleetRequest extends Request
{
    /**
     * @param array{FleetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
