<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset;

trait GetPresetTrait
{
    /**
     * @param GetPresetRequest $args
     * @return GetPresetResponse
     */
    public function getPreset(GetPresetRequest $args)
    {
        $result = parent::getPreset($args->toArray());
        return new GetPresetResponse($result->toArray());
    }
}
