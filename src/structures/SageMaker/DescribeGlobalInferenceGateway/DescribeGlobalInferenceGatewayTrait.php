<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeGlobalInferenceGateway;

trait DescribeGlobalInferenceGatewayTrait
{
    /**
     * @param DescribeGlobalInferenceGatewayRequest $args
     * @return DescribeGlobalInferenceGatewayResponse
     */
    public function describeGlobalInferenceGateway(DescribeGlobalInferenceGatewayRequest $args)
    {
        $result = parent::describeGlobalInferenceGateway($args->toArray());
        return new DescribeGlobalInferenceGatewayResponse($result->toArray());
    }
}
