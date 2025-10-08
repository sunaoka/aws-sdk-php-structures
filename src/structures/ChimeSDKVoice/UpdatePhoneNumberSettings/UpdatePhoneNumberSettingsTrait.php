<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdatePhoneNumberSettings;

trait UpdatePhoneNumberSettingsTrait
{
    /**
     * @param UpdatePhoneNumberSettingsRequest $args
     * @return void
     */
    public function updatePhoneNumberSettings(UpdatePhoneNumberSettingsRequest $args)
    {
        parent::updatePhoneNumberSettings($args->toArray());
    }
}
