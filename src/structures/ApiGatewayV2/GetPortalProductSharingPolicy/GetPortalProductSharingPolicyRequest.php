<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortalProductSharingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalProductId
 */
class GetPortalProductSharingPolicyRequest extends Request
{
    /**
     * @param array{PortalProductId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
