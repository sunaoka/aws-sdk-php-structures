<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageGroupName
 * @property int $ModelPackageVersion
 * @property string $ModelPackageArn
 * @property string $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property InferenceSpecification $InferenceSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 */
class BatchDescribeModelPackageSummary extends Shape
{
    /**
     * @param array{
     *     ModelPackageGroupName: string,
     *     ModelPackageVersion?: int,
     *     ModelPackageArn: string,
     *     ModelPackageDescription?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     InferenceSpecification: InferenceSpecification,
     *     ModelPackageStatus: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting',
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
