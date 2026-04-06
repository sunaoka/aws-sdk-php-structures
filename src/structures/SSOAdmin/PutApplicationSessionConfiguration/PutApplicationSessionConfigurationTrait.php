<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationSessionConfiguration;

trait PutApplicationSessionConfigurationTrait
{
    /**
     * @param PutApplicationSessionConfigurationRequest $args
     * @return PutApplicationSessionConfigurationResponse
     */
    public function putApplicationSessionConfiguration(PutApplicationSessionConfigurationRequest $args)
    {
        $result = parent::putApplicationSessionConfiguration($args->toArray());
        return new PutApplicationSessionConfigurationResponse($result->toArray());
    }
}
