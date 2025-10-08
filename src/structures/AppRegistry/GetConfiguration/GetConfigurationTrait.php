<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetConfiguration;

trait GetConfigurationTrait
{
    /**
     * @return GetConfigurationResponse
     */
    public function getConfiguration()
    {
        $result = parent::getConfiguration();
        return new GetConfigurationResponse($result->toArray());
    }
}
