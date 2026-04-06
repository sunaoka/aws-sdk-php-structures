<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutServiceLinkedConfigurationRecorder;

trait PutServiceLinkedConfigurationRecorderTrait
{
    /**
     * @param PutServiceLinkedConfigurationRecorderRequest $args
     * @return PutServiceLinkedConfigurationRecorderResponse
     */
    public function putServiceLinkedConfigurationRecorder(PutServiceLinkedConfigurationRecorderRequest $args)
    {
        $result = parent::putServiceLinkedConfigurationRecorder($args->toArray());
        return new PutServiceLinkedConfigurationRecorderResponse($result->toArray());
    }
}
