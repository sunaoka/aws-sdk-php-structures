<?php

namespace Sunaoka\Aws\Structures\RTBFabric\RejectLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 */
class RejectLinkRequest extends Request
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
