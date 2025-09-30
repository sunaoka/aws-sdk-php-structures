<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 */
class GetListenerRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     listenerIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
