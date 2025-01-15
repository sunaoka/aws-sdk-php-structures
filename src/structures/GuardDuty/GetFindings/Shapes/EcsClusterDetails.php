<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Status
 * @property int|null $ActiveServicesCount
 * @property int|null $RegisteredContainerInstancesCount
 * @property int|null $RunningTasksCount
 * @property list<Tag>|null $Tags
 * @property EcsTaskDetails|null $TaskDetails
 */
class EcsClusterDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Status?: string|null,
     *     ActiveServicesCount?: int|null,
     *     RegisteredContainerInstancesCount?: int|null,
     *     RunningTasksCount?: int|null,
     *     Tags?: list<Tag>|null,
     *     TaskDetails?: EcsTaskDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
