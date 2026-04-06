<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbNetworkId
 */
class GetOdbNetworkRequest extends Request
{
    /**
     * @param array{odbNetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
