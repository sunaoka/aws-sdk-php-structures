<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\AcceptChannelHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 */
class AcceptChannelHandshakeRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
