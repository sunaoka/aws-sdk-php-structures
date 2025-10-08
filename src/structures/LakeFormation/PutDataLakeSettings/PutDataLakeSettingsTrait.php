<?php

namespace Sunaoka\Aws\Structures\LakeFormation\PutDataLakeSettings;

trait PutDataLakeSettingsTrait
{
    /**
     * @param PutDataLakeSettingsRequest $args
     * @return PutDataLakeSettingsResponse
     */
    public function putDataLakeSettings(PutDataLakeSettingsRequest $args)
    {
        $result = parent::putDataLakeSettings($args->toArray());
        return new PutDataLakeSettingsResponse($result->toArray());
    }
}
