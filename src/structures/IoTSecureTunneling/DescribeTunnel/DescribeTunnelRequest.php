<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tunnelId
 */
class DescribeTunnelRequest extends Request
{
    /**
     * @param array{tunnelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
