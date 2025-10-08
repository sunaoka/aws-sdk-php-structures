<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnectLoa;

trait DescribeInterconnectLoaTrait
{
    /**
     * @param DescribeInterconnectLoaRequest $args
     * @return DescribeInterconnectLoaResponse
     */
    public function describeInterconnectLoa(DescribeInterconnectLoaRequest $args)
    {
        $result = parent::describeInterconnectLoa($args->toArray());
        return new DescribeInterconnectLoaResponse($result->toArray());
    }
}
