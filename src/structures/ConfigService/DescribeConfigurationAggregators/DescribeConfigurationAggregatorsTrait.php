<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators;

trait DescribeConfigurationAggregatorsTrait
{
    /**
     * @param DescribeConfigurationAggregatorsRequest $args
     * @return DescribeConfigurationAggregatorsResponse
     */
    public function describeConfigurationAggregators(DescribeConfigurationAggregatorsRequest $args)
    {
        $result = parent::describeConfigurationAggregators($args->toArray());
        return new DescribeConfigurationAggregatorsResponse($result->toArray());
    }
}
