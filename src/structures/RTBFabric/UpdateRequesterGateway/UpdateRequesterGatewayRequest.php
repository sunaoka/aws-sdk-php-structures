<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateRequesterGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $gatewayId
 * @property string|null $description
 */
class UpdateRequesterGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     gatewayId: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
