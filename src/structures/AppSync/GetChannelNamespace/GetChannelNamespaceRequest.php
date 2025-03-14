<?php

namespace Sunaoka\Aws\Structures\AppSync\GetChannelNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 */
class GetChannelNamespaceRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
