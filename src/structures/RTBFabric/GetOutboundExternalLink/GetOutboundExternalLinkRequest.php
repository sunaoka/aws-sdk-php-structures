<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetOutboundExternalLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 */
class GetOutboundExternalLinkRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
