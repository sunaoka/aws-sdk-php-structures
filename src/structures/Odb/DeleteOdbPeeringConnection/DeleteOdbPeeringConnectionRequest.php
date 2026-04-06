<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteOdbPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbPeeringConnectionId
 */
class DeleteOdbPeeringConnectionRequest extends Request
{
    /**
     * @param array{odbPeeringConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
