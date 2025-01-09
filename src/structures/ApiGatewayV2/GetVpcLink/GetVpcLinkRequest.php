<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcLinkId
 */
class GetVpcLinkRequest extends Request
{
    /**
     * @param array{VpcLinkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
