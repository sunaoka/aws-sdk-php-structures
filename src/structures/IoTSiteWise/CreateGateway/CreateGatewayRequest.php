<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayName
 * @property Shapes\GatewayPlatform $gatewayPlatform
 * @property array<string, string> $tags
 */
class CreateGatewayRequest extends Request
{
    /**
     * @param array{
     *     gatewayName: string,
     *     gatewayPlatform: Shapes\GatewayPlatform,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
