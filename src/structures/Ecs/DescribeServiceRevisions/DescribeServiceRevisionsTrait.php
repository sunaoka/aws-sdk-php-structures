<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions;

trait DescribeServiceRevisionsTrait
{
    /**
     * @param DescribeServiceRevisionsRequest $args
     * @return DescribeServiceRevisionsResponse
     */
    public function describeServiceRevisions(DescribeServiceRevisionsRequest $args)
    {
        $result = parent::describeServiceRevisions($args->toArray());
        return new DescribeServiceRevisionsResponse($result->toArray());
    }
}
