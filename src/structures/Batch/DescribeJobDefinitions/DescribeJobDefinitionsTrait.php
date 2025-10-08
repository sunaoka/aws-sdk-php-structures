<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions;

trait DescribeJobDefinitionsTrait
{
    /**
     * @param DescribeJobDefinitionsRequest $args
     * @return DescribeJobDefinitionsResponse
     */
    public function describeJobDefinitions(DescribeJobDefinitionsRequest $args)
    {
        $result = parent::describeJobDefinitions($args->toArray());
        return new DescribeJobDefinitionsResponse($result->toArray());
    }
}
