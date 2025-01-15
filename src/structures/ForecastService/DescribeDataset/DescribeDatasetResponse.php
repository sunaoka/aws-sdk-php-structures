<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DatasetArn
 * @property string|null $DatasetName
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS'|null $Domain
 * @property 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA'|null $DatasetType
 * @property string|null $DataFrequency
 * @property Shapes\Schema|null $Schema
 * @property Shapes\EncryptionConfig|null $EncryptionConfig
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class DescribeDatasetResponse extends Response
{
}
