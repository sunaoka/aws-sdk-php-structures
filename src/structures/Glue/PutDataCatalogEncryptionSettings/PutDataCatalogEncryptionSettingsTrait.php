<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings;

trait PutDataCatalogEncryptionSettingsTrait
{
    /**
     * @param PutDataCatalogEncryptionSettingsRequest $args
     * @return PutDataCatalogEncryptionSettingsResponse
     */
    public function putDataCatalogEncryptionSettings(PutDataCatalogEncryptionSettingsRequest $args)
    {
        $result = parent::putDataCatalogEncryptionSettings($args->toArray());
        return new PutDataCatalogEncryptionSettingsResponse($result->toArray());
    }
}
