<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration;

trait ModifyVerifiedAccessInstanceLoggingConfigurationTrait
{
    /**
     * @param ModifyVerifiedAccessInstanceLoggingConfigurationRequest $args
     * @return ModifyVerifiedAccessInstanceLoggingConfigurationResponse
     */
    public function modifyVerifiedAccessInstanceLoggingConfiguration(
        ModifyVerifiedAccessInstanceLoggingConfigurationRequest $args,
    ) {
        $result = parent::modifyVerifiedAccessInstanceLoggingConfiguration($args->toArray());
        return new ModifyVerifiedAccessInstanceLoggingConfigurationResponse($result->toArray());
    }
}
