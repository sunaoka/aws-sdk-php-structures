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
 */
class DescribeStorageConfigurationResponse extends Response
{
}
