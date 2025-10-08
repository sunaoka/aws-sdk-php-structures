<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset;

trait UpdatePresetTrait
{
    /**
     * @param UpdatePresetRequest $args
     * @return UpdatePresetResponse
     */
    public function updatePreset(UpdatePresetRequest $args)
    {
        $result = parent::updatePreset($args->toArray());
        return new UpdatePresetResponse($result->toArray());
    }
}
