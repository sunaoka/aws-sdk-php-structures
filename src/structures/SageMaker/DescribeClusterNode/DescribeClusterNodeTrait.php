<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode;

trait DescribeClusterNodeTrait
{
    /**
     * @param DescribeClusterNodeRequest $args
     * @return DescribeClusterNodeResponse
     */
    public function describeClusterNode(DescribeClusterNodeRequest $args)
    {
        $result = parent::describeClusterNode($args->toArray());
        return new DescribeClusterNodeResponse($result->toArray());
    }
}
