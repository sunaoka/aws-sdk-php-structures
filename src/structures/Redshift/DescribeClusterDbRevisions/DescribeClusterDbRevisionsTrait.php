<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions;

trait DescribeClusterDbRevisionsTrait
{
    /**
     * @param DescribeClusterDbRevisionsRequest $args
     * @return DescribeClusterDbRevisionsResponse
     */
    public function describeClusterDbRevisions(DescribeClusterDbRevisionsRequest $args)
    {
        $result = parent::describeClusterDbRevisions($args->toArray());
        return new DescribeClusterDbRevisionsResponse($result->toArray());
    }
}
