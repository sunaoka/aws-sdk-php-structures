<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig;

trait DescribeAppImageConfigTrait
{
    /**
     * @param DescribeAppImageConfigRequest $args
     * @return DescribeAppImageConfigResponse
     */
    public function describeAppImageConfig(DescribeAppImageConfigRequest $args)
    {
        $result = parent::describeAppImageConfig($args->toArray());
        return new DescribeAppImageConfigResponse($result->toArray());
    }
}
