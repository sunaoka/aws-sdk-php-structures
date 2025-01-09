<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string $meshOwner
 * @property string $virtualRouterName
 */
class DescribeVirtualRouterRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
