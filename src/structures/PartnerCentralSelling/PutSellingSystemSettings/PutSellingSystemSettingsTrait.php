<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\PutSellingSystemSettings;

trait PutSellingSystemSettingsTrait
{
    /**
     * @param PutSellingSystemSettingsRequest $args
     * @return PutSellingSystemSettingsResponse
     */
    public function putSellingSystemSettings(PutSellingSystemSettingsRequest $args)
    {
        $result = parent::putSellingSystemSettings($args->toArray());
        return new PutSellingSystemSettingsResponse($result->toArray());
    }
}
