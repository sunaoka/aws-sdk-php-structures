<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $EgressCidrBlocks
 * @property string $Name
 * @property list<Shapes\GatewayNetwork> $Networks
 */
class CreateGatewayRequest extends Request
{
    /**
     * @param array{
     *     EgressCidrBlocks: list<string>,
     *     Name: string,
     *     Networks: list<Shapes\GatewayNetwork>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
