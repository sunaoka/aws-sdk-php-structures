<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelBiasJobDefinition;

trait DescribeModelBiasJobDefinitionTrait
{
    /**
     * @param DescribeModelBiasJobDefinitionRequest $args
     * @return DescribeModelBiasJobDefinitionResponse
     */
    public function describeModelBiasJobDefinition(DescribeModelBiasJobDefinitionRequest $args)
    {
        $result = parent::describeModelBiasJobDefinition($args->toArray());
        return new DescribeModelBiasJobDefinitionResponse($result->toArray());
    }
}
