<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBase;

trait DescribeKnowledgeBaseTrait
{
    /**
     * @param DescribeKnowledgeBaseRequest $args
     * @return DescribeKnowledgeBaseResponse
     */
    public function describeKnowledgeBase(DescribeKnowledgeBaseRequest $args)
    {
        $result = parent::describeKnowledgeBase($args->toArray());
        return new DescribeKnowledgeBaseResponse($result->toArray());
    }
}
