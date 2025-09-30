<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 */
class DeleteListenerRequest extends Request
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
