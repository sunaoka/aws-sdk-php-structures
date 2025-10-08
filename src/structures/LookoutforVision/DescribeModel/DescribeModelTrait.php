<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModel;

trait DescribeModelTrait
{
    /**
     * @param DescribeModelRequest $args
     * @return DescribeModelResponse
     */
    public function describeModel(DescribeModelRequest $args)
    {
        $result = parent::describeModel($args->toArray());
        return new DescribeModelResponse($result->toArray());
    }
}
