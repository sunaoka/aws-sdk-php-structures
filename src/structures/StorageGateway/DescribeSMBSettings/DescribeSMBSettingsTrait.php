<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBSettings;

trait DescribeSMBSettingsTrait
{
    /**
     * @param DescribeSMBSettingsRequest $args
     * @return DescribeSMBSettingsResponse
     */
    public function describeSMBSettings(DescribeSMBSettingsRequest $args)
    {
        $result = parent::describeSMBSettings($args->toArray());
        return new DescribeSMBSettingsResponse($result->toArray());
    }
}
