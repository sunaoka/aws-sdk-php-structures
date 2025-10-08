<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdatePublicSharingSettings;

trait UpdatePublicSharingSettingsTrait
{
    /**
     * @param UpdatePublicSharingSettingsRequest $args
     * @return UpdatePublicSharingSettingsResponse
     */
    public function updatePublicSharingSettings(UpdatePublicSharingSettingsRequest $args)
    {
        $result = parent::updatePublicSharingSettings($args->toArray());
        return new UpdatePublicSharingSettingsResponse($result->toArray());
    }
}
