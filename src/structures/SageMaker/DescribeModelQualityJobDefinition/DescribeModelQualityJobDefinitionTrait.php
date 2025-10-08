<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition;

trait DescribeModelQualityJobDefinitionTrait
{
    /**
     * @param DescribeModelQualityJobDefinitionRequest $args
     * @return DescribeModelQualityJobDefinitionResponse
     */
    public function describeModelQualityJobDefinition(DescribeModelQualityJobDefinitionRequest $args)
    {
        $result = parent::describeModelQualityJobDefinition($args->toArray());
        return new DescribeModelQualityJobDefinitionResponse($result->toArray());
    }
}
