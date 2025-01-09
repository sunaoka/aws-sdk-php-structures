<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackageGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageGroupName
 * @property string $ModelPackageGroupArn
 * @property string $ModelPackageGroupDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed' $ModelPackageGroupStatus
 */
class ModelPackageGroupSummary extends Shape
{
    /**
     * @param array{
     *     ModelPackageGroupName: string,
     *     ModelPackageGroupArn: string,
     *     ModelPackageGroupDescription?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ModelPackageGroupStatus: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
