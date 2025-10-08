<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel;

trait DescribeDetectorModelTrait
{
    /**
     * @param DescribeDetectorModelRequest $args
     * @return DescribeDetectorModelResponse
     */
    public function describeDetectorModel(DescribeDetectorModelRequest $args)
    {
        $result = parent::describeDetectorModel($args->toArray());
        return new DescribeDetectorModelResponse($result->toArray());
    }
}
