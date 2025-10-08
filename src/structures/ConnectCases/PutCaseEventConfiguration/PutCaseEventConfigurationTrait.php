<?php

namespace Sunaoka\Aws\Structures\ConnectCases\PutCaseEventConfiguration;

trait PutCaseEventConfigurationTrait
{
    /**
     * @param PutCaseEventConfigurationRequest $args
     * @return PutCaseEventConfigurationResponse
     */
    public function putCaseEventConfiguration(PutCaseEventConfigurationRequest $args)
    {
        $result = parent::putCaseEventConfiguration($args->toArray());
        return new PutCaseEventConfigurationResponse($result->toArray());
    }
}
