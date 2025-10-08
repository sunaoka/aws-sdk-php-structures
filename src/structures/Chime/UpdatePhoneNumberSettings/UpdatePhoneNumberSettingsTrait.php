<?php

namespace Sunaoka\Aws\Structures\Chime\UpdatePhoneNumberSettings;

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
