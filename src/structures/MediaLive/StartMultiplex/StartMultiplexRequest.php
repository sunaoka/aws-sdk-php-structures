<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 */
class StartMultiplexRequest extends Request
{
    /**
     * @param array{MultiplexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
