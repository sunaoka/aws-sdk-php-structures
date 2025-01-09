<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServicesByNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespace
 * @property string $nextToken
 * @property int $maxResults
 */
class ListServicesByNamespaceRequest extends Request
{
    /**
     * @param array{
     *     namespace: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
