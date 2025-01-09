<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkIdentifier
 */
class GetServiceNetworkRequest extends Request
{
    /**
     * @param array{serviceNetworkIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
