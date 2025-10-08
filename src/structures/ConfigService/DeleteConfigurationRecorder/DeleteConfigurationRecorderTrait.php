<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConfigurationRecorder;

trait DeleteConfigurationRecorderTrait
{
    /**
     * @param DeleteConfigurationRecorderRequest $args
     * @return void
     */
    public function deleteConfigurationRecorder(DeleteConfigurationRecorderRequest $args)
    {
        parent::deleteConfigurationRecorder($args->toArray());
    }
}
