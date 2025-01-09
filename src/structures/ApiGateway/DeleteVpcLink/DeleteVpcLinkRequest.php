<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcLinkId
 */
class DeleteVpcLinkRequest extends Request
{
    /**
     * @param array{vpcLinkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
