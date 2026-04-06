<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $peerGatewayId
 * @property Shapes\LinkAttributes|null $attributes
 * @property bool|null $httpResponderAllowed
 * @property array<string, string>|null $tags
 * @property Shapes\LinkLogSettings $logSettings
 */
class CreateLinkRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     peerGatewayId: string,
     *     attributes?: Shapes\LinkAttributes|null,
     *     httpResponderAllowed?: bool|null,
     *     tags?: array<string, string>|null,
     *     logSettings: Shapes\LinkLogSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
