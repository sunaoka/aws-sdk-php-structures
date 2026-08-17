<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeExtractionDefinition;

trait DescribeExtractionDefinitionTrait
{
    /**
     * @param DescribeExtractionDefinitionRequest $args
     * @return DescribeExtractionDefinitionResponse
     */
    public function describeExtractionDefinition(DescribeExtractionDefinitionRequest $args)
    {
        $result = parent::describeExtractionDefinition($args->toArray());
        return new DescribeExtractionDefinitionResponse($result->toArray());
    }
}
