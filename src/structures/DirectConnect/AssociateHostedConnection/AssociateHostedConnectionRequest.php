<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateHostedConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $parentConnectionId
 */
class AssociateHostedConnectionRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     parentConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
