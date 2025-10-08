<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets;

trait ListPresetsTrait
{
    /**
     * @param ListPresetsRequest $args
     * @return ListPresetsResponse
     */
    public function listPresets(ListPresetsRequest $args)
    {
        $result = parent::listPresets($args->toArray());
        return new ListPresetsResponse($result->toArray());
    }
}
