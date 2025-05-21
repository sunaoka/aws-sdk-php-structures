<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string|null $nextToken
 * @property int<1, 20>|null $maxResults
 */
class ListDataLakeNamespacesRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
