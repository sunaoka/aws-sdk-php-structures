<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DisablePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalId
 */
class DisablePortalRequest extends Request
{
    /**
     * @param array{PortalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
