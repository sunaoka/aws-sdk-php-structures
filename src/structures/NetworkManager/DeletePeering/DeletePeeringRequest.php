<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeletePeering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PeeringId
 */
class DeletePeeringRequest extends Request
{
    /**
     * @param array{PeeringId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
