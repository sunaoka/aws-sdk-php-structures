<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteAccessLogSettings;

trait DeleteAccessLogSettingsTrait
{
    /**
     * @param DeleteAccessLogSettingsRequest $args
     * @return void
     */
    public function deleteAccessLogSettings(DeleteAccessLogSettingsRequest $args)
    {
        parent::deleteAccessLogSettings($args->toArray());
    }
}
