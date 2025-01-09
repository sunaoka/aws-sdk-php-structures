<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE' $storageType
 * @property Shapes\MultiLayerStorage $multiLayerStorage
 * @property 'ENABLED'|'DISABLED' $disassociatedDataStorage
 * @property Shapes\RetentionPeriod $retentionPeriod
 * @property Shapes\ConfigurationStatus $configurationStatus
 * @property 'ENABLED'|'DISABLED' $warmTier
 * @property Shapes\WarmTierRetentionPeriod $warmTierRetentionPeriod
 */
class PutStorageConfigurationResponse extends Response
{
}
