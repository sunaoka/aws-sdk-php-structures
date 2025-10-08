<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAllowedImagesSettings;

trait GetAllowedImagesSettingsTrait
{
    /**
     * @param GetAllowedImagesSettingsRequest $args
     * @return GetAllowedImagesSettingsResponse
     */
    public function getAllowedImagesSettings(GetAllowedImagesSettingsRequest $args)
    {
        $result = parent::getAllowedImagesSettings($args->toArray());
        return new GetAllowedImagesSettingsResponse($result->toArray());
    }
}
