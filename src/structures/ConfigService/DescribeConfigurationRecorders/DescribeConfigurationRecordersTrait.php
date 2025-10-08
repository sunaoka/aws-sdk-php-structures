<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorders;

trait DescribeConfigurationRecordersTrait
{
    /**
     * @param DescribeConfigurationRecordersRequest $args
     * @return DescribeConfigurationRecordersResponse
     */
    public function describeConfigurationRecorders(DescribeConfigurationRecordersRequest $args)
    {
        $result = parent::describeConfigurationRecorders($args->toArray());
        return new DescribeConfigurationRecordersResponse($result->toArray());
    }
}
