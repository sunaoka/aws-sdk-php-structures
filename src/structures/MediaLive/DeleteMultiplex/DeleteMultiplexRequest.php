<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 */
class DeleteMultiplexRequest extends Request
{
    /**
     * @param array{MultiplexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
