<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeMetricAttribution;

trait DescribeMetricAttributionTrait
{
    /**
     * @param DescribeMetricAttributionRequest $args
     * @return DescribeMetricAttributionResponse
     */
    public function describeMetricAttribution(DescribeMetricAttributionRequest $args)
    {
        $result = parent::describeMetricAttribution($args->toArray());
        return new DescribeMetricAttributionResponse($result->toArray());
    }
}
