<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $listenerIdentifier
 * @property string $serviceIdentifier
 */
class GetListenerRequest extends Request
{
    /**
     * @param array{
     *     listenerIdentifier: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
