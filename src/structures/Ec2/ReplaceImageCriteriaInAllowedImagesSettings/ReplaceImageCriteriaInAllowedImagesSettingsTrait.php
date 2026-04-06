<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings;

trait ReplaceImageCriteriaInAllowedImagesSettingsTrait
{
    /**
     * @param ReplaceImageCriteriaInAllowedImagesSettingsRequest $args
     * @return ReplaceImageCriteriaInAllowedImagesSettingsResponse
     */
    public function replaceImageCriteriaInAllowedImagesSettings(ReplaceImageCriteriaInAllowedImagesSettingsRequest $args)
    {
        $result = parent::replaceImageCriteriaInAllowedImagesSettings($args->toArray());
        return new ReplaceImageCriteriaInAllowedImagesSettingsResponse($result->toArray());
    }
}
