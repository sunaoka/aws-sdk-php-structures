<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualRouters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $limit
 * @property string $meshName
 * @property string $meshOwner
 * @property string $nextToken
 */
class ListVirtualRoutersRequest extends Request
{
    /**
     * @param array{
     *     limit?: int,
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
