<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueryDefinitions;

trait DescribeQueryDefinitionsTrait
{
    /**
     * @param DescribeQueryDefinitionsRequest $args
     * @return DescribeQueryDefinitionsResponse
     */
    public function describeQueryDefinitions(DescribeQueryDefinitionsRequest $args)
    {
        $result = parent::describeQueryDefinitions($args->toArray());
        return new DescribeQueryDefinitionsResponse($result->toArray());
    }
}
