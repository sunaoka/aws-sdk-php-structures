<?php

namespace Sunaoka\Aws\Structures\Proton\RejectEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class RejectEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
