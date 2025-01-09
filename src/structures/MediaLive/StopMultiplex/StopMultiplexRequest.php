<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 */
class StopMultiplexRequest extends Request
{
    /**
     * @param array{MultiplexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
