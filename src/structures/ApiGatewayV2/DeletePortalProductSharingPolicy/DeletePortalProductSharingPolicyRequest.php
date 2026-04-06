<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeletePortalProductSharingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalProductId
 */
class DeletePortalProductSharingPolicyRequest extends Request
{
    /**
     * @param array{PortalProductId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
