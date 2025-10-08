<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition;

trait DescribeAnalysisDefinitionTrait
{
    /**
     * @param DescribeAnalysisDefinitionRequest $args
     * @return DescribeAnalysisDefinitionResponse
     */
    public function describeAnalysisDefinition(DescribeAnalysisDefinitionRequest $args)
    {
        $result = parent::describeAnalysisDefinition($args->toArray());
        return new DescribeAnalysisDefinitionResponse($result->toArray());
    }
}
