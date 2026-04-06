<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeComputationModel;

trait DescribeComputationModelTrait
{
    /**
     * @param DescribeComputationModelRequest $args
     * @return DescribeComputationModelResponse
     */
    public function describeComputationModel(DescribeComputationModelRequest $args)
    {
        $result = parent::describeComputationModel($args->toArray());
        return new DescribeComputationModelResponse($result->toArray());
    }
}
