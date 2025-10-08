<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataLakeSettings;

trait GetDataLakeSettingsTrait
{
    /**
     * @param GetDataLakeSettingsRequest $args
     * @return GetDataLakeSettingsResponse
     */
    public function getDataLakeSettings(GetDataLakeSettingsRequest $args)
    {
        $result = parent::getDataLakeSettings($args->toArray());
        return new GetDataLakeSettingsResponse($result->toArray());
    }
}
