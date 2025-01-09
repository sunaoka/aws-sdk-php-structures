<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectorReferencedId
 * @property string $CollectorName
 * @property string $CollectorVersion
 * @property 'UP_TO_DATE'|'OUTDATED'|'UNSUPPORTED' $VersionStatus
 * @property string $Description
 * @property string $S3BucketName
 * @property string $ServiceAccessRoleArn
 * @property CollectorHealthCheck $CollectorHealthCheck
 * @property string $LastDataReceived
 * @property string $RegisteredDate
 * @property string $CreatedDate
 * @property string $ModifiedDate
 * @property InventoryData $InventoryData
 */
class CollectorResponse extends Shape
{
    /**
     * @param array{
     *     CollectorReferencedId?: string,
     *     CollectorName?: string,
     *     CollectorVersion?: string,
     *     VersionStatus?: 'UP_TO_DATE'|'OUTDATED'|'UNSUPPORTED',
     *     Description?: string,
     *     S3BucketName?: string,
     *     ServiceAccessRoleArn?: string,
     *     CollectorHealthCheck?: CollectorHealthCheck,
     *     LastDataReceived?: string,
     *     RegisteredDate?: string,
     *     CreatedDate?: string,
     *     ModifiedDate?: string,
     *     InventoryData?: InventoryData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
