<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsBlockList;

trait DescribeQuerySuggestionsBlockListTrait
{
    /**
     * @param DescribeQuerySuggestionsBlockListRequest $args
     * @return DescribeQuerySuggestionsBlockListResponse
     */
    public function describeQuerySuggestionsBlockList(DescribeQuerySuggestionsBlockListRequest $args)
    {
        $result = parent::describeQuerySuggestionsBlockList($args->toArray());
        return new DescribeQuerySuggestionsBlockListResponse($result->toArray());
    }
}
