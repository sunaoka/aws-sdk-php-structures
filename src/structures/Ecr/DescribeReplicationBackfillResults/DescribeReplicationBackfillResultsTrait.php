<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeReplicationBackfillResults;

trait DescribeReplicationBackfillResultsTrait
{
    /**
     * @param DescribeReplicationBackfillResultsRequest $args
     * @return DescribeReplicationBackfillResultsResponse
     */
    public function describeReplicationBackfillResults(DescribeReplicationBackfillResultsRequest $args)
    {
        $result = parent::describeReplicationBackfillResults($args->toArray());
        return new DescribeReplicationBackfillResultsResponse($result->toArray());
    }
}
