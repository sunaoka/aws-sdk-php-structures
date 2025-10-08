<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\CreateConfigurationSet;

trait CreateConfigurationSetTrait
{
    /**
     * @param CreateConfigurationSetRequest $args
     * @return CreateConfigurationSetResponse
     */
    public function createConfigurationSet(CreateConfigurationSetRequest $args)
    {
        $result = parent::createConfigurationSet($args->toArray());
        return new CreateConfigurationSetResponse($result->toArray());
    }
}
