<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 */
class GetNetworkRequest extends Request
{
    /**
     * @param array{NetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
