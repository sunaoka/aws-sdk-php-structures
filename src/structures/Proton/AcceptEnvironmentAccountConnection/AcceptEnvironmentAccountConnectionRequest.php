<?php

namespace Sunaoka\Aws\Structures\Proton\AcceptEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class AcceptEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
