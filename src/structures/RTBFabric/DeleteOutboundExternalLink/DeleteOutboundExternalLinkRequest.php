<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteOutboundExternalLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 */
class DeleteOutboundExternalLinkRequest extends Request
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
