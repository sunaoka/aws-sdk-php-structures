<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkIdentifier
 */
class DeleteServiceNetworkRequest extends Request
{
    /**
     * @param array{serviceNetworkIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
