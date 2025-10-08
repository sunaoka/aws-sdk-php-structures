<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsConfig;

trait DescribeQuerySuggestionsConfigTrait
{
    /**
     * @param DescribeQuerySuggestionsConfigRequest $args
     * @return DescribeQuerySuggestionsConfigResponse
     */
    public function describeQuerySuggestionsConfig(DescribeQuerySuggestionsConfigRequest $args)
    {
        $result = parent::describeQuerySuggestionsConfig($args->toArray());
        return new DescribeQuerySuggestionsConfigResponse($result->toArray());
    }
}
