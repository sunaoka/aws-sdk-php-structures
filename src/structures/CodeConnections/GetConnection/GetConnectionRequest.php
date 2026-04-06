<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionArn
 */
class GetConnectionRequest extends Request
{
    /**
     * @param array{ConnectionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
