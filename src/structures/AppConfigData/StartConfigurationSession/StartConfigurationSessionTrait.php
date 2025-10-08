<?php

namespace Sunaoka\Aws\Structures\AppConfigData\StartConfigurationSession;

trait StartConfigurationSessionTrait
{
    /**
     * @param StartConfigurationSessionRequest $args
     * @return StartConfigurationSessionResponse
     */
    public function startConfigurationSession(StartConfigurationSessionRequest $args)
    {
        $result = parent::startConfigurationSession($args->toArray());
        return new StartConfigurationSessionResponse($result->toArray());
    }
}
