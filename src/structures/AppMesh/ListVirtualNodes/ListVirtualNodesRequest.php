<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $limit
 * @property string $meshName
 * @property string $meshOwner
 * @property string $nextToken
 */
class ListVirtualNodesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>,
     *     meshName: string,
     *     meshOwner?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
