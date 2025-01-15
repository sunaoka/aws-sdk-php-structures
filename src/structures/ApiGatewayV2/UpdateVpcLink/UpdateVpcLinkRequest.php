<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $VpcLinkId
 */
class UpdateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     VpcLinkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
