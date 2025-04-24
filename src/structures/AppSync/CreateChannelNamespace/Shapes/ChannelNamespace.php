<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateChannelNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apiId
 * @property string|null $name
 * @property list<AuthMode>|null $subscribeAuthModes
 * @property list<AuthMode>|null $publishAuthModes
 * @property string|null $codeHandlers
 * @property array<string, string>|null $tags
 * @property string|null $channelNamespaceArn
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $lastModified
 * @property HandlerConfigs|null $handlerConfigs
 */
class ChannelNamespace extends Shape
{
    /**
     * @param array{
     *     apiId?: string|null,
     *     name?: string|null,
     *     subscribeAuthModes?: list<AuthMode>|null,
     *     publishAuthModes?: list<AuthMode>|null,
     *     codeHandlers?: string|null,
     *     tags?: array<string, string>|null,
     *     channelNamespaceArn?: string|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     lastModified?: \Aws\Api\DateTimeResult|null,
     *     handlerConfigs?: HandlerConfigs|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
