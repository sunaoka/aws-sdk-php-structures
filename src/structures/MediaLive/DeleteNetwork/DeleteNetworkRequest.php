<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 */
class DeleteNetworkRequest extends Request
{
    /**
     * @param array{NetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
