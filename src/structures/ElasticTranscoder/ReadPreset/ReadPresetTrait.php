<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset;

trait ReadPresetTrait
{
    /**
     * @param ReadPresetRequest $args
     * @return ReadPresetResponse
     */
    public function readPreset(ReadPresetRequest $args)
    {
        $result = parent::readPreset($args->toArray());
        return new ReadPresetResponse($result->toArray());
    }
}
