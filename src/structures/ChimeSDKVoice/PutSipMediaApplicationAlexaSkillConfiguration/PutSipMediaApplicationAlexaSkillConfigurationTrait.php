<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutSipMediaApplicationAlexaSkillConfiguration;

trait PutSipMediaApplicationAlexaSkillConfigurationTrait
{
    /**
     * @param PutSipMediaApplicationAlexaSkillConfigurationRequest $args
     * @return PutSipMediaApplicationAlexaSkillConfigurationResponse
     */
    public function putSipMediaApplicationAlexaSkillConfiguration(PutSipMediaApplicationAlexaSkillConfigurationRequest $args)
    {
        $result = parent::putSipMediaApplicationAlexaSkillConfiguration($args->toArray());
        return new PutSipMediaApplicationAlexaSkillConfigurationResponse($result->toArray());
    }
}
