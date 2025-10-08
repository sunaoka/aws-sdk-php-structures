<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseEventConfiguration;

trait GetCaseEventConfigurationTrait
{
    /**
     * @param GetCaseEventConfigurationRequest $args
     * @return GetCaseEventConfigurationResponse
     */
    public function getCaseEventConfiguration(GetCaseEventConfigurationRequest $args)
    {
        $result = parent::getCaseEventConfiguration($args->toArray());
        return new GetCaseEventConfigurationResponse($result->toArray());
    }
}
