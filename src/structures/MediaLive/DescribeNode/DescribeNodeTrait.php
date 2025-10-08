<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeNode;

trait DescribeNodeTrait
{
    /**
     * @param DescribeNodeRequest $args
     * @return DescribeNodeResponse
     */
    public function describeNode(DescribeNodeRequest $args)
    {
        $result = parent::describeNode($args->toArray());
        return new DescribeNodeResponse($result->toArray());
    }
}
