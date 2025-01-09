<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 */
class DeleteDBProxyRequest extends Request
{
    /**
     * @param array{DBProxyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
