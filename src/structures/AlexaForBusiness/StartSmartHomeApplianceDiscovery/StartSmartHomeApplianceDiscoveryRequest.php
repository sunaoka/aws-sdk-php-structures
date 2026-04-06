<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\StartSmartHomeApplianceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoomArn
 */
class StartSmartHomeApplianceDiscoveryRequest extends Request
{
    /**
     * @param array{RoomArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
