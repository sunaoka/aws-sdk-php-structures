<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection;

trait DescribeConnectionTrait
{
    /**
     * @param DescribeConnectionRequest $args
     * @return DescribeConnectionResponse
     */
    public function describeConnection(DescribeConnectionRequest $args)
    {
        $result = parent::describeConnection($args->toArray());
        return new DescribeConnectionResponse($result->toArray());
    }
}
