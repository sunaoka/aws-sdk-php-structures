<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetGatewayGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayGroupArn
 */
class GetGatewayGroupRequest extends Request
{
    /**
     * @param array{GatewayGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
