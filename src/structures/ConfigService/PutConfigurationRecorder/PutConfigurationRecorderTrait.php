<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationRecorder;

trait PutConfigurationRecorderTrait
{
    /**
     * @param PutConfigurationRecorderRequest $args
     * @return void
     */
    public function putConfigurationRecorder(PutConfigurationRecorderRequest $args)
    {
        parent::putConfigurationRecorder($args->toArray());
    }
}
