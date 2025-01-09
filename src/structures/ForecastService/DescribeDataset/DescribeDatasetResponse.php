<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatasetArn
 * @property string $DatasetName
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS' $Domain
 * @property 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA' $DatasetType
 * @property string $DataFrequency
 * @property Shapes\Schema $Schema
 * @property Shapes\EncryptionConfig $EncryptionConfig
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class DescribeDatasetResponse extends Response
{
}
