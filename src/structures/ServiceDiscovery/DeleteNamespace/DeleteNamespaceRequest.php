<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DeleteNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteNamespaceRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
