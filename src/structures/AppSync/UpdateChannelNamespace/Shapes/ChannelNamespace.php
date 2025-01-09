<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateChannelNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiId
 * @property string $name
 * @property list<AuthMode> $subscribeAuthModes
 * @property list<AuthMode> $publishAuthModes
 * @property string $codeHandlers
 * @property array<string, string> $tags
 * @property string $channelNamespaceArn
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $lastModified
 */
class ChannelNamespace extends Shape
{
    /**
     * @param array{
     *     apiId?: string,
     *     name?: string,
     *     subscribeAuthModes?: list<AuthMode>,
     *     publishAuthModes?: list<AuthMode>,
     *     codeHandlers?: string,
     *     tags?: array<string, string>,
     *     channelNamespaceArn?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     lastModified?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
