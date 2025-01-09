<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJobShipmentState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property 'RECEIVED'|'RETURNED' $ShipmentState
 */
class UpdateJobShipmentStateRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     ShipmentState: 'RECEIVED'|'RETURNED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
