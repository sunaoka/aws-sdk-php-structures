<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
