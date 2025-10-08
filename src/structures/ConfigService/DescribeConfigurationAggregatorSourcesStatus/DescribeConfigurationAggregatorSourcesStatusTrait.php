<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregatorSourcesStatus;

trait DescribeConfigurationAggregatorSourcesStatusTrait
{
    /**
     * @param DescribeConfigurationAggregatorSourcesStatusRequest $args
     * @return DescribeConfigurationAggregatorSourcesStatusResponse
     */
    public function describeConfigurationAggregatorSourcesStatus(
        DescribeConfigurationAggregatorSourcesStatusRequest $args,
    ) {
        $result = parent::describeConfigurationAggregatorSourcesStatus($args->toArray());
        return new DescribeConfigurationAggregatorSourcesStatusResponse($result->toArray());
    }
}
