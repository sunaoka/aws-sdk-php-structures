<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration;

trait DescribeTLSInspectionConfigurationTrait
{
    /**
     * @param DescribeTLSInspectionConfigurationRequest $args
     * @return DescribeTLSInspectionConfigurationResponse
     */
    public function describeTLSInspectionConfiguration(DescribeTLSInspectionConfigurationRequest $args)
    {
        $result = parent::describeTLSInspectionConfiguration($args->toArray());
        return new DescribeTLSInspectionConfigurationResponse($result->toArray());
    }
}
