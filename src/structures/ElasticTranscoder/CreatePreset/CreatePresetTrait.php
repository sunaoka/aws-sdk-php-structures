<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset;

trait CreatePresetTrait
{
    /**
     * @param CreatePresetRequest $args
     * @return CreatePresetResponse
     */
    public function createPreset(CreatePresetRequest $args)
    {
        $result = parent::createPreset($args->toArray());
        return new CreatePresetResponse($result->toArray());
    }
}
