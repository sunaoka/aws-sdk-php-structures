<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceName
 */
class DeleteIdNamespaceRequest extends Request
{
    /**
     * @param array{idNamespaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
