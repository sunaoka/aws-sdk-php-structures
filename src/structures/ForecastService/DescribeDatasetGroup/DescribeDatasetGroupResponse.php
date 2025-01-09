<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatasetGroupName
 * @property string $DatasetGroupArn
 * @property list<string> $DatasetArns
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS' $Domain
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class DescribeDatasetGroupResponse extends Response
{
}
