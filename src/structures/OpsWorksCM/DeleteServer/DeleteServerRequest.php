<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DeleteServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 */
class DeleteServerRequest extends Request
{
    /**
     * @param array{ServerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
