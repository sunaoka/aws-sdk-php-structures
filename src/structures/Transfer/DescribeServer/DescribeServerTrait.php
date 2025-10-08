<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer;

trait DescribeServerTrait
{
    /**
     * @param DescribeServerRequest $args
     * @return DescribeServerResponse
     */
    public function describeServer(DescribeServerRequest $args)
    {
        $result = parent::describeServer($args->toArray());
        return new DescribeServerResponse($result->toArray());
    }
}
