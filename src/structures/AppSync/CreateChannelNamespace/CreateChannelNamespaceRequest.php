<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateChannelNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property list<Shapes\AuthMode>|null $subscribeAuthModes
 * @property list<Shapes\AuthMode>|null $publishAuthModes
 * @property string|null $codeHandlers
 * @property array<string, string>|null $tags
 * @property Shapes\HandlerConfigs|null $handlerConfigs
 */
class CreateChannelNamespaceRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     subscribeAuthModes?: list<Shapes\AuthMode>|null,
     *     publishAuthModes?: list<Shapes\AuthMode>|null,
     *     codeHandlers?: string|null,
     *     tags?: array<string, string>|null,
     *     handlerConfigs?: Shapes\HandlerConfigs|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
