<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceName
 */
class GetIdNamespaceRequest extends Request
{
    /**
     * @param array{idNamespaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
