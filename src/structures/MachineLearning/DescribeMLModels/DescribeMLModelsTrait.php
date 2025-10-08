<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeMLModels;

trait DescribeMLModelsTrait
{
    /**
     * @param DescribeMLModelsRequest $args
     * @return DescribeMLModelsResponse
     */
    public function describeMLModels(DescribeMLModelsRequest $args)
    {
        $result = parent::describeMLModels($args->toArray());
        return new DescribeMLModelsResponse($result->toArray());
    }
}
