<?php

namespace Sunaoka\Aws\Structures\ConfigService\StopConfigurationRecorder;

trait StopConfigurationRecorderTrait
{
    /**
     * @param StopConfigurationRecorderRequest $args
     * @return void
     */
    public function stopConfigurationRecorder(StopConfigurationRecorderRequest $args)
    {
        parent::stopConfigurationRecorder($args->toArray());
    }
}
