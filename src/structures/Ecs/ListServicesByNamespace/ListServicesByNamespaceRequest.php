<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServicesByNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespace
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListServicesByNamespaceRequest extends Request
{
    /**
     * @param array{
     *     namespace: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
