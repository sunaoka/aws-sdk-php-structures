<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateInboundExternalLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $gatewayId
 * @property Shapes\LinkAttributes|null $attributes
 * @property Shapes\LinkLogSettings $logSettings
 * @property array<string, string>|null $tags
 */
class CreateInboundExternalLinkRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     gatewayId: string,
     *     attributes?: Shapes\LinkAttributes|null,
     *     logSettings: Shapes\LinkLogSettings,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
