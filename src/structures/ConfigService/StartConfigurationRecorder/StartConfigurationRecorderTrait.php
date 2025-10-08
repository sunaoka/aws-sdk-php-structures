<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartConfigurationRecorder;

trait StartConfigurationRecorderTrait
{
    /**
     * @param StartConfigurationRecorderRequest $args
     * @return void
     */
    public function startConfigurationRecorder(StartConfigurationRecorderRequest $args)
    {
        parent::startConfigurationRecorder($args->toArray());
    }
}
