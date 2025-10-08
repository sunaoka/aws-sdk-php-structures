<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelExplainabilityJobDefinition;

trait DescribeModelExplainabilityJobDefinitionTrait
{
    /**
     * @param DescribeModelExplainabilityJobDefinitionRequest $args
     * @return DescribeModelExplainabilityJobDefinitionResponse
     */
    public function describeModelExplainabilityJobDefinition(DescribeModelExplainabilityJobDefinitionRequest $args)
    {
        $result = parent::describeModelExplainabilityJobDefinition($args->toArray());
        return new DescribeModelExplainabilityJobDefinitionResponse($result->toArray());
    }
}
