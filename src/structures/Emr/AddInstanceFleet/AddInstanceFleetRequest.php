<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property Shapes\InstanceFleetConfig $InstanceFleet
 */
class AddInstanceFleetRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     InstanceFleet: Shapes\InstanceFleetConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
