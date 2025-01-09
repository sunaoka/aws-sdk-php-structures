<?php

namespace Sunaoka\Aws\Structures\Keyspaces\DeleteKeyspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 */
class DeleteKeyspaceRequest extends Request
{
    /**
     * @param array{keyspaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
