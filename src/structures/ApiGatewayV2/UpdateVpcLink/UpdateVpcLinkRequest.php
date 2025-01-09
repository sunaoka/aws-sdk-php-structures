<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $VpcLinkId
 */
class UpdateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     VpcLinkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
