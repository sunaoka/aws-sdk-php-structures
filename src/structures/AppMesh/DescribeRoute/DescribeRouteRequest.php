<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string $routeName
 * @property string $virtualRouterName
 */
class DescribeRouteRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string|null,
     *     routeName: string,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
