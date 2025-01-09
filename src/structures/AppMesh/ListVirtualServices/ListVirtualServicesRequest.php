<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $limit
 * @property string $meshName
 * @property string $meshOwner
 * @property string $nextToken
 */
class ListVirtualServicesRequest extends Request
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
