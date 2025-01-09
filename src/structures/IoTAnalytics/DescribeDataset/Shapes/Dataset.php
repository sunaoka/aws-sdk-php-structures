<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property list<DatasetAction> $actions
 * @property list<DatasetTrigger> $triggers
 * @property list<DatasetContentDeliveryRule> $contentDeliveryRules
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property RetentionPeriod $retentionPeriod
 * @property VersioningConfiguration $versioningConfiguration
 * @property list<LateDataRule> $lateDataRules
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     actions?: list<DatasetAction>,
     *     triggers?: list<DatasetTrigger>,
     *     contentDeliveryRules?: list<DatasetContentDeliveryRule>,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     retentionPeriod?: RetentionPeriod,
     *     versioningConfiguration?: VersioningConfiguration,
     *     lateDataRules?: list<LateDataRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
