<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbPeeringConnectionId
 */
class GetOdbPeeringConnectionRequest extends Request
{
    /**
     * @param array{odbPeeringConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
