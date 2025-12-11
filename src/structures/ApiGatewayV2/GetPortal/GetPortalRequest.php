<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalId
 */
class GetPortalRequest extends Request
{
    /**
     * @param array{PortalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
