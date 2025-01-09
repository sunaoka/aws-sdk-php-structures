<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageName
 * @property string $ModelPackageGroupName
 * @property int $ModelPackageVersion
 * @property string $ModelPackageArn
 * @property string $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 */
class ModelPackageSummary extends Shape
{
    /**
     * @param array{
     *     ModelPackageName?: string,
     *     ModelPackageGroupName?: string,
     *     ModelPackageVersion?: int,
     *     ModelPackageArn: string,
     *     ModelPackageDescription?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ModelPackageStatus: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting',
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
