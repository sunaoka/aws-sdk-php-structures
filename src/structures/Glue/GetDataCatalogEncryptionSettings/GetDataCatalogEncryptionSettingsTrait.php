<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogEncryptionSettings;

trait GetDataCatalogEncryptionSettingsTrait
{
    /**
     * @param GetDataCatalogEncryptionSettingsRequest $args
     * @return GetDataCatalogEncryptionSettingsResponse
     */
    public function getDataCatalogEncryptionSettings(GetDataCatalogEncryptionSettingsRequest $args)
    {
        $result = parent::getDataCatalogEncryptionSettings($args->toArray());
        return new GetDataCatalogEncryptionSettingsResponse($result->toArray());
    }
}
