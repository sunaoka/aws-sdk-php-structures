<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 */
class GetProxyAttributesRequest extends Request
{
    /**
     * @param array{proxyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
