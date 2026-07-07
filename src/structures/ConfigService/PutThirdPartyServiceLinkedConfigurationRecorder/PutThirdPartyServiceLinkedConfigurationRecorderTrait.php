<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutThirdPartyServiceLinkedConfigurationRecorder;

trait PutThirdPartyServiceLinkedConfigurationRecorderTrait
{
    /**
     * @param PutThirdPartyServiceLinkedConfigurationRecorderRequest $args
     * @return PutThirdPartyServiceLinkedConfigurationRecorderResponse
     */
    public function putThirdPartyServiceLinkedConfigurationRecorder(PutThirdPartyServiceLinkedConfigurationRecorderRequest $args)
    {
        $result = parent::putThirdPartyServiceLinkedConfigurationRecorder($args->toArray());
        return new PutThirdPartyServiceLinkedConfigurationRecorderResponse($result->toArray());
    }
}
