<?php

namespace Sunaoka\Aws\Structures\Interconnect\GetConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetConnectionRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
