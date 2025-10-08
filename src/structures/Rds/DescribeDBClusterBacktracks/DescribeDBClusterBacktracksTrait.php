<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterBacktracks;

trait DescribeDBClusterBacktracksTrait
{
    /**
     * @param DescribeDBClusterBacktracksRequest $args
     * @return DescribeDBClusterBacktracksResponse
     */
    public function describeDBClusterBacktracks(DescribeDBClusterBacktracksRequest $args)
    {
        $result = parent::describeDBClusterBacktracks($args->toArray());
        return new DescribeDBClusterBacktracksResponse($result->toArray());
    }
}
