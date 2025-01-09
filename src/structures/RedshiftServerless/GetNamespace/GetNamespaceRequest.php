<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespaceName
 */
class GetNamespaceRequest extends Request
{
    /**
     * @param array{namespaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
