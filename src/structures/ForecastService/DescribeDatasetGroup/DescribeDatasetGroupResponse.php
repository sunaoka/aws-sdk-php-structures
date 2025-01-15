<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DatasetGroupName
 * @property string|null $DatasetGroupArn
 * @property list<string>|null $DatasetArns
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS'|null $Domain
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class DescribeDatasetGroupResponse extends Response
{
}
