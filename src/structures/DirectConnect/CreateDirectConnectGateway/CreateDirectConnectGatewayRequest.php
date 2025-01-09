<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayName
 * @property int $amazonSideAsn
 */
class CreateDirectConnectGatewayRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayName: string,
     *     amazonSideAsn?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
