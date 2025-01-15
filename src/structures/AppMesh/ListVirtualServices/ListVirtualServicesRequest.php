<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $limit
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string|null $nextToken
 */
class ListVirtualServicesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
