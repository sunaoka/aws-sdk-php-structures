<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetGeneration;

trait DescribeTestSetGenerationTrait
{
    /**
     * @param DescribeTestSetGenerationRequest $args
     * @return DescribeTestSetGenerationResponse
     */
    public function describeTestSetGeneration(DescribeTestSetGenerationRequest $args)
    {
        $result = parent::describeTestSetGeneration($args->toArray());
        return new DescribeTestSetGenerationResponse($result->toArray());
    }
}
