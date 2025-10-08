<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeDocumentVersions;

trait DescribeDocumentVersionsTrait
{
    /**
     * @param DescribeDocumentVersionsRequest $args
     * @return DescribeDocumentVersionsResponse
     */
    public function describeDocumentVersions(DescribeDocumentVersionsRequest $args)
    {
        $result = parent::describeDocumentVersions($args->toArray());
        return new DescribeDocumentVersionsResponse($result->toArray());
    }
}
