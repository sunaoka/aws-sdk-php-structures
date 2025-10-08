<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeConfigurationSets;

trait DescribeConfigurationSetsTrait
{
    /**
     * @param DescribeConfigurationSetsRequest $args
     * @return DescribeConfigurationSetsResponse
     */
    public function describeConfigurationSets(DescribeConfigurationSetsRequest $args)
    {
        $result = parent::describeConfigurationSets($args->toArray());
        return new DescribeConfigurationSetsResponse($result->toArray());
    }
}
