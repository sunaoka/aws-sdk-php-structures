<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string $meshOwner
 * @property string $virtualServiceName
 */
class DescribeVirtualServiceRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
