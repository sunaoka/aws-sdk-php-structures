<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition;

trait DescribeFlowDefinitionTrait
{
    /**
     * @param DescribeFlowDefinitionRequest $args
     * @return DescribeFlowDefinitionResponse
     */
    public function describeFlowDefinition(DescribeFlowDefinitionRequest $args)
    {
        $result = parent::describeFlowDefinition($args->toArray());
        return new DescribeFlowDefinitionResponse($result->toArray());
    }
}
