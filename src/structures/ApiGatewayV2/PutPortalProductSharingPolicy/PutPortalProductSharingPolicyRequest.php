<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutPortalProductSharingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyDocument
 * @property string $PortalProductId
 */
class PutPortalProductSharingPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyDocument: string,
     *     PortalProductId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
