<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateChannelNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property list<Shapes\AuthMode> $subscribeAuthModes
 * @property list<Shapes\AuthMode> $publishAuthModes
 * @property string $codeHandlers
 */
class UpdateChannelNamespaceRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     subscribeAuthModes?: list<Shapes\AuthMode>,
     *     publishAuthModes?: list<Shapes\AuthMode>,
     *     codeHandlers?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
