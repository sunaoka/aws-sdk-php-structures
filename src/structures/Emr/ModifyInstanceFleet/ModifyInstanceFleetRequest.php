<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property Shapes\InstanceFleetModifyConfig $InstanceFleet
 */
class ModifyInstanceFleetRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     InstanceFleet: Shapes\InstanceFleetModifyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
