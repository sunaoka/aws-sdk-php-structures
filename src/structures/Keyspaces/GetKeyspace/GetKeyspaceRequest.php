<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetKeyspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 */
class GetKeyspaceRequest extends Request
{
    /**
     * @param array{keyspaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
