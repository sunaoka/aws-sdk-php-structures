<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAllowedImagesSettings;

trait EnableAllowedImagesSettingsTrait
{
    /**
     * @param EnableAllowedImagesSettingsRequest $args
     * @return EnableAllowedImagesSettingsResponse
     */
    public function enableAllowedImagesSettings(EnableAllowedImagesSettingsRequest $args)
    {
        $result = parent::enableAllowedImagesSettings($args->toArray());
        return new EnableAllowedImagesSettingsResponse($result->toArray());
    }
}
