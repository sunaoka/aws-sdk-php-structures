<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelPackageGroupName
 * @property string|null $ModelPackageGroupArn
 * @property string|null $ModelPackageGroupDescription
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed'|null $ModelPackageGroupStatus
 * @property list<Tag>|null $Tags
 */
class ModelPackageGroup extends Shape
{
    /**
     * @param array{
     *     ModelPackageGroupName?: string|null,
     *     ModelPackageGroupArn?: string|null,
     *     ModelPackageGroupDescription?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     ModelPackageGroupStatus?: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
