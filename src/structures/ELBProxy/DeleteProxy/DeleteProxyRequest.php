<?php

namespace Sunaoka\Aws\Structures\ELBProxy\DeleteProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 */
class DeleteProxyRequest extends Request
{
    /**
     * @param array{proxyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
