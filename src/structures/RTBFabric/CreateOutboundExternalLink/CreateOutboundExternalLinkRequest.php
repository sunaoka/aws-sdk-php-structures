<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateOutboundExternalLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $gatewayId
 * @property Shapes\LinkAttributes|null $attributes
 * @property string $publicEndpoint
 * @property Shapes\LinkLogSettings $logSettings
 * @property array<string, string>|null $tags
 */
class CreateOutboundExternalLinkRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     gatewayId: string,
     *     attributes?: Shapes\LinkAttributes|null,
     *     publicEndpoint: string,
     *     logSettings: Shapes\LinkLogSettings,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
