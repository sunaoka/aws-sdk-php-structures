<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ForgetSmartHomeAppliances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoomArn
 */
class ForgetSmartHomeAppliancesRequest extends Request
{
    /**
     * @param array{RoomArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
