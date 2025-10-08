<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\DeletePreset;

trait DeletePresetTrait
{
    /**
     * @param DeletePresetRequest $args
     * @return DeletePresetResponse
     */
    public function deletePreset(DeletePresetRequest $args)
    {
        $result = parent::deletePreset($args->toArray());
        return new DeletePresetResponse($result->toArray());
    }
}
