<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayName
 * @property int|null $amazonSideAsn
 */
class CreateDirectConnectGatewayRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayName: string,
     *     amazonSideAsn?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
