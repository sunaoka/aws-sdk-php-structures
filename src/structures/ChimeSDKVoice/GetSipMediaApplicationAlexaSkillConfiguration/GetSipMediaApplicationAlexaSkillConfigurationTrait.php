<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipMediaApplicationAlexaSkillConfiguration;

trait GetSipMediaApplicationAlexaSkillConfigurationTrait
{
    /**
     * @param GetSipMediaApplicationAlexaSkillConfigurationRequest $args
     * @return GetSipMediaApplicationAlexaSkillConfigurationResponse
     */
    public function getSipMediaApplicationAlexaSkillConfiguration(
        GetSipMediaApplicationAlexaSkillConfigurationRequest $args,
    ) {
        $result = parent::getSipMediaApplicationAlexaSkillConfiguration($args->toArray());
        return new GetSipMediaApplicationAlexaSkillConfigurationResponse($result->toArray());
    }
}
