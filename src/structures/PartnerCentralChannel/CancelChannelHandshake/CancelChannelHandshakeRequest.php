<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CancelChannelHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 */
class CancelChannelHandshakeRequest extends Request
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
