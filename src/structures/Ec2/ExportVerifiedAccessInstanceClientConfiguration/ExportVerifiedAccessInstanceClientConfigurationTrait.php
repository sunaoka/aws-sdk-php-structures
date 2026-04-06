<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration;

trait ExportVerifiedAccessInstanceClientConfigurationTrait
{
    /**
     * @param ExportVerifiedAccessInstanceClientConfigurationRequest $args
     * @return ExportVerifiedAccessInstanceClientConfigurationResponse
     */
    public function exportVerifiedAccessInstanceClientConfiguration(ExportVerifiedAccessInstanceClientConfigurationRequest $args)
    {
        $result = parent::exportVerifiedAccessInstanceClientConfiguration($args->toArray());
        return new ExportVerifiedAccessInstanceClientConfigurationResponse($result->toArray());
    }
}
