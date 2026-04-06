<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayName
 * @property list<Shapes\Tag>|null $tags
 * @property int|null $amazonSideAsn
 */
class CreateDirectConnectGatewayRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayName: string,
     *     tags?: list<Shapes\Tag>|null,
     *     amazonSideAsn?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
