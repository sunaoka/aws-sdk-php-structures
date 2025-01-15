<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListMeshes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $limit
 * @property string|null $nextToken
 */
class ListMeshesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
