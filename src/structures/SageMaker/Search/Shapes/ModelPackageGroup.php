<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageGroupName
 * @property string $ModelPackageGroupArn
 * @property string $ModelPackageGroupDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed' $ModelPackageGroupStatus
 * @property list<Tag> $Tags
 */
class ModelPackageGroup extends Shape
{
    /**
     * @param array{
     *     ModelPackageGroupName?: string,
     *     ModelPackageGroupArn?: string,
     *     ModelPackageGroupDescription?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     ModelPackageGroupStatus?: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
