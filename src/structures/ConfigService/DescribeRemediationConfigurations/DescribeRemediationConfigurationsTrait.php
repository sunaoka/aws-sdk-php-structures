<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations;

trait DescribeRemediationConfigurationsTrait
{
    /**
     * @param DescribeRemediationConfigurationsRequest $args
     * @return DescribeRemediationConfigurationsResponse
     */
    public function describeRemediationConfigurations(DescribeRemediationConfigurationsRequest $args)
    {
        $result = parent::describeRemediationConfigurations($args->toArray());
        return new DescribeRemediationConfigurationsResponse($result->toArray());
    }
}
