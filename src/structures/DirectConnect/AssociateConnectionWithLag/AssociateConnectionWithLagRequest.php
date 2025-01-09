<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateConnectionWithLag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $lagId
 */
class AssociateConnectionWithLagRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     lagId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
