<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetSellingSystemSettings;

trait GetSellingSystemSettingsTrait
{
    /**
     * @param GetSellingSystemSettingsRequest $args
     * @return GetSellingSystemSettingsResponse
     */
    public function getSellingSystemSettings(GetSellingSystemSettingsRequest $args)
    {
        $result = parent::getSellingSystemSettings($args->toArray());
        return new GetSellingSystemSettingsResponse($result->toArray());
    }
}
