<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration;

trait DescribeRiskConfigurationTrait
{
    /**
     * @param DescribeRiskConfigurationRequest $args
     * @return DescribeRiskConfigurationResponse
     */
    public function describeRiskConfiguration(DescribeRiskConfigurationRequest $args)
    {
        $result = parent::describeRiskConfiguration($args->toArray());
        return new DescribeRiskConfigurationResponse($result->toArray());
    }
}
