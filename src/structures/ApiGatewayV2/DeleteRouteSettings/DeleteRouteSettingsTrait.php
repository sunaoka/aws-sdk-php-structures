<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRouteSettings;

trait DeleteRouteSettingsTrait
{
    /**
     * @param DeleteRouteSettingsRequest $args
     * @return void
     */
    public function deleteRouteSettings(DeleteRouteSettingsRequest $args)
    {
        parent::deleteRouteSettings($args->toArray());
    }
}
