<?php

namespace Sunaoka\Aws\Structures\RTBFabric\AcceptLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property Shapes\LinkAttributes|null $attributes
 * @property Shapes\LinkLogSettings $logSettings
 */
class AcceptLinkRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     attributes?: Shapes\LinkAttributes|null,
     *     logSettings: Shapes\LinkLogSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
