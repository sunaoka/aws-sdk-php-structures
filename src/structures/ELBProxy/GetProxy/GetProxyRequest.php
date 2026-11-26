<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 */
class GetProxyRequest extends Request
{
    /**
     * @param array{proxyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
