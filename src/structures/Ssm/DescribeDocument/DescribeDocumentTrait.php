<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument;

trait DescribeDocumentTrait
{
    /**
     * @param DescribeDocumentRequest $args
     * @return DescribeDocumentResponse
     */
    public function describeDocument(DescribeDocumentRequest $args)
    {
        $result = parent::describeDocument($args->toArray());
        return new DescribeDocumentResponse($result->toArray());
    }
}
