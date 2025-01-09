<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcLinkId
 */
class DeleteVpcLinkRequest extends Request
{
    /**
     * @param array{VpcLinkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
