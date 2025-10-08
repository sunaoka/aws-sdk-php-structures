<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLConfiguration;

trait GetMLConfigurationTrait
{
    /**
     * @param GetMLConfigurationRequest $args
     * @return GetMLConfigurationResponse
     */
    public function getMLConfiguration(GetMLConfigurationRequest $args)
    {
        $result = parent::getMLConfiguration($args->toArray());
        return new GetMLConfigurationResponse($result->toArray());
    }
}
