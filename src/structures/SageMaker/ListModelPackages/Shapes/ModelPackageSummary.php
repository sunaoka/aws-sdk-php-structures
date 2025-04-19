<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelPackageName
 * @property string|null $ModelPackageGroupName
 * @property int<1, max>|null $ModelPackageVersion
 * @property string $ModelPackageArn
 * @property string|null $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property 'Approved'|'Rejected'|'PendingManualApproval'|null $ModelApprovalStatus
 * @property ModelLifeCycle|null $ModelLifeCycle
 */
class ModelPackageSummary extends Shape
{
    /**
     * @param array{
     *     ModelPackageName?: string|null,
     *     ModelPackageGroupName?: string|null,
     *     ModelPackageVersion?: int<1, max>|null,
     *     ModelPackageArn: string,
     *     ModelPackageDescription?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ModelPackageStatus: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting',
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'|null,
     *     ModelLifeCycle?: ModelLifeCycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
