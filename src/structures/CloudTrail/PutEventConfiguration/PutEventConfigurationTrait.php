<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventConfiguration;

trait PutEventConfigurationTrait
{
    /**
     * @param PutEventConfigurationRequest $args
     * @return PutEventConfigurationResponse
     */
    public function putEventConfiguration(PutEventConfigurationRequest $args)
    {
        $result = parent::putEventConfiguration($args->toArray());
        return new PutEventConfigurationResponse($result->toArray());
    }
}
