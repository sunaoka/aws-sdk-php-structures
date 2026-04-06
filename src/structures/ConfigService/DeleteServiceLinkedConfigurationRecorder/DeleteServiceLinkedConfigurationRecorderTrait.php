<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteServiceLinkedConfigurationRecorder;

trait DeleteServiceLinkedConfigurationRecorderTrait
{
    /**
     * @param DeleteServiceLinkedConfigurationRecorderRequest $args
     * @return DeleteServiceLinkedConfigurationRecorderResponse
     */
    public function deleteServiceLinkedConfigurationRecorder(DeleteServiceLinkedConfigurationRecorderRequest $args)
    {
        $result = parent::deleteServiceLinkedConfigurationRecorder($args->toArray());
        return new DeleteServiceLinkedConfigurationRecorderResponse($result->toArray());
    }
}
