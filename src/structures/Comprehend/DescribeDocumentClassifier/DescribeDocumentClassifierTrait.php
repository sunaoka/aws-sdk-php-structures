<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDocumentClassifier;

trait DescribeDocumentClassifierTrait
{
    /**
     * @param DescribeDocumentClassifierRequest $args
     * @return DescribeDocumentClassifierResponse
     */
    public function describeDocumentClassifier(DescribeDocumentClassifierRequest $args)
    {
        $result = parent::describeDocumentClassifier($args->toArray());
        return new DescribeDocumentClassifierResponse($result->toArray());
    }
}
