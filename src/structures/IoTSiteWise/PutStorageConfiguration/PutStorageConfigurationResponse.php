<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE' $storageType
 * @property Shapes\MultiLayerStorage|null $multiLayerStorage
 * @property 'ENABLED'|'DISABLED'|null $disassociatedDataStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property Shapes\ConfigurationStatus $configurationStatus
 * @property 'ENABLED'|'DISABLED'|null $warmTier
 * @property Shapes\WarmTierRetentionPeriod|null $warmTierRetentionPeriod
 * @property bool|null $disallowIngestNullNaN
 */
class PutStorageConfigurationResponse extends Response
{
}
