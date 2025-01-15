<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CollectorReferencedId
 * @property string|null $CollectorName
 * @property string|null $CollectorVersion
 * @property 'UP_TO_DATE'|'OUTDATED'|'UNSUPPORTED'|null $VersionStatus
 * @property string|null $Description
 * @property string|null $S3BucketName
 * @property string|null $ServiceAccessRoleArn
 * @property CollectorHealthCheck|null $CollectorHealthCheck
 * @property string|null $LastDataReceived
 * @property string|null $RegisteredDate
 * @property string|null $CreatedDate
 * @property string|null $ModifiedDate
 * @property InventoryData|null $InventoryData
 */
class CollectorResponse extends Shape
{
    /**
     * @param array{
     *     CollectorReferencedId?: string|null,
     *     CollectorName?: string|null,
     *     CollectorVersion?: string|null,
     *     VersionStatus?: 'UP_TO_DATE'|'OUTDATED'|'UNSUPPORTED'|null,
     *     Description?: string|null,
     *     S3BucketName?: string|null,
     *     ServiceAccessRoleArn?: string|null,
     *     CollectorHealthCheck?: CollectorHealthCheck|null,
     *     LastDataReceived?: string|null,
     *     RegisteredDate?: string|null,
     *     CreatedDate?: string|null,
     *     ModifiedDate?: string|null,
     *     InventoryData?: InventoryData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
