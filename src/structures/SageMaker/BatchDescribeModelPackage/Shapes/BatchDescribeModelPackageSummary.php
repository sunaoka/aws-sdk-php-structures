<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageGroupName
 * @property int<1, max>|null $ModelPackageVersion
 * @property string $ModelPackageArn
 * @property string|null $ModelPackageDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property InferenceSpecification $InferenceSpecification
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $ModelPackageStatus
 * @property 'Approved'|'Rejected'|'PendingManualApproval'|null $ModelApprovalStatus
 * @property 'Logged'|'Registered'|null $ModelPackageRegistrationType
 */
class BatchDescribeModelPackageSummary extends Shape
{
    /**
     * @param array{
     *     ModelPackageGroupName: string,
     *     ModelPackageVersion?: int<1, max>|null,
     *     ModelPackageArn: string,
     *     ModelPackageDescription?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     InferenceSpecification: InferenceSpecification,
     *     ModelPackageStatus: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting',
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval'|null,
     *     ModelPackageRegistrationType?: 'Logged'|'Registered'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
