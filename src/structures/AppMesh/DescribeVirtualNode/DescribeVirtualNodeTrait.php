<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode;

trait DescribeVirtualNodeTrait
{
    /**
     * @param DescribeVirtualNodeRequest $args
     * @return DescribeVirtualNodeResponse
     */
    public function describeVirtualNode(DescribeVirtualNodeRequest $args)
    {
        $result = parent::describeVirtualNode($args->toArray());
        return new DescribeVirtualNodeResponse($result->toArray());
    }
}
