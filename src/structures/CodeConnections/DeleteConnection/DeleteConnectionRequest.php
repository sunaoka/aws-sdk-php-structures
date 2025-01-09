<?php

namespace Sunaoka\Aws\Structures\CodeConnections\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionArn
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{ConnectionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
