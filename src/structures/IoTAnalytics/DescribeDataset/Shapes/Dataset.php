<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property list<DatasetAction>|null $actions
 * @property list<DatasetTrigger>|null $triggers
 * @property list<DatasetContentDeliveryRule>|null $contentDeliveryRules
 * @property 'CREATING'|'ACTIVE'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property RetentionPeriod|null $retentionPeriod
 * @property VersioningConfiguration|null $versioningConfiguration
 * @property list<LateDataRule>|null $lateDataRules
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     actions?: list<DatasetAction>|null,
     *     triggers?: list<DatasetTrigger>|null,
     *     contentDeliveryRules?: list<DatasetContentDeliveryRule>|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     retentionPeriod?: RetentionPeriod|null,
     *     versioningConfiguration?: VersioningConfiguration|null,
     *     lateDataRules?: list<LateDataRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
