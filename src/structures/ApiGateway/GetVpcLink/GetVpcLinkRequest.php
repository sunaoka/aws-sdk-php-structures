<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcLinkId
 */
class GetVpcLinkRequest extends Request
{
    /**
     * @param array{vpcLinkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
