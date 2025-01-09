<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Status
 * @property int $ActiveServicesCount
 * @property int $RegisteredContainerInstancesCount
 * @property int $RunningTasksCount
 * @property list<Tag> $Tags
 * @property EcsTaskDetails $TaskDetails
 */
class EcsClusterDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Status?: string,
     *     ActiveServicesCount?: int,
     *     RegisteredContainerInstancesCount?: int,
     *     RunningTasksCount?: int,
     *     Tags?: list<Tag>,
     *     TaskDetails?: EcsTaskDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
