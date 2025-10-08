<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDataQualityJobDefinition;

trait DescribeDataQualityJobDefinitionTrait
{
    /**
     * @param DescribeDataQualityJobDefinitionRequest $args
     * @return DescribeDataQualityJobDefinitionResponse
     */
    public function describeDataQualityJobDefinition(DescribeDataQualityJobDefinitionRequest $args)
    {
        $result = parent::describeDataQualityJobDefinition($args->toArray());
        return new DescribeDataQualityJobDefinitionResponse($result->toArray());
    }
}
