<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string $meshOwner
 * @property string $virtualGatewayName
 */
class DescribeVirtualGatewayRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
