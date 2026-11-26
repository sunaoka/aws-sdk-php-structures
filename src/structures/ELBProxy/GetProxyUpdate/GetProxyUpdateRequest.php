<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property string $updateIdentifier
 */
class GetProxyUpdateRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     updateIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
