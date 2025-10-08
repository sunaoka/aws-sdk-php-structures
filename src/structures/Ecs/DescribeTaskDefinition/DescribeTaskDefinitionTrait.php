<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition;

trait DescribeTaskDefinitionTrait
{
    /**
     * @param DescribeTaskDefinitionRequest $args
     * @return DescribeTaskDefinitionResponse
     */
    public function describeTaskDefinition(DescribeTaskDefinitionRequest $args)
    {
        $result = parent::describeTaskDefinition($args->toArray());
        return new DescribeTaskDefinitionResponse($result->toArray());
    }
}
