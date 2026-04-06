<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteGatewayGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayGroupArn
 */
class DeleteGatewayGroupRequest extends Request
{
    /**
     * @param array{GatewayGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
