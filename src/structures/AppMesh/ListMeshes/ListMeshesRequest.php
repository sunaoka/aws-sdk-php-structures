<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListMeshes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $limit
 * @property string $nextToken
 */
class ListMeshesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
