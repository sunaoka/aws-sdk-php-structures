<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorderStatus;

trait DescribeConfigurationRecorderStatusTrait
{
    /**
     * @param DescribeConfigurationRecorderStatusRequest $args
     * @return DescribeConfigurationRecorderStatusResponse
     */
    public function describeConfigurationRecorderStatus(DescribeConfigurationRecorderStatusRequest $args)
    {
        $result = parent::describeConfigurationRecorderStatus($args->toArray());
        return new DescribeConfigurationRecorderStatusResponse($result->toArray());
    }
}
