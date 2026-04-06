<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE' $storageType
 * @property Shapes\MultiLayerStorage|null $multiLayerStorage
 * @property 'ENABLED'|'DISABLED'|null $disassociatedDataStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property Shapes\ConfigurationStatus $configurationStatus
 * @property \Aws\Api\DateTimeResult|null $lastUpdateDate
 * @property 'ENABLED'|'DISABLED'|null $warmTier
 * @property Shapes\WarmTierRetentionPeriod|null $warmTierRetentionPeriod
 * @property bool|null $disallowIngestNullNaN
 */
class DescribeStorageConfigurationResponse extends Response
{
}
