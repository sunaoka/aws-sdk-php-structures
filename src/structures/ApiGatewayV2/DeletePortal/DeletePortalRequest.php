<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeletePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalId
 */
class DeletePortalRequest extends Request
{
    /**
     * @param array{PortalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
