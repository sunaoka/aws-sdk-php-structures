<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayName
 * @property Shapes\GatewayPlatform $gatewayPlatform
 * @property array<string, string>|null $tags
 */
class CreateGatewayRequest extends Request
{
    /**
     * @param array{
     *     gatewayName: string,
     *     gatewayPlatform: Shapes\GatewayPlatform,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
