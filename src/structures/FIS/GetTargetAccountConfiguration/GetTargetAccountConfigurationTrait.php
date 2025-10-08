<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetAccountConfiguration;

trait GetTargetAccountConfigurationTrait
{
    /**
     * @param GetTargetAccountConfigurationRequest $args
     * @return GetTargetAccountConfigurationResponse
     */
    public function getTargetAccountConfiguration(GetTargetAccountConfigurationRequest $args)
    {
        $result = parent::getTargetAccountConfiguration($args->toArray());
        return new GetTargetAccountConfigurationResponse($result->toArray());
    }
}
