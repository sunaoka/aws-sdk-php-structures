<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupArn
 * @property string $GroupName
 */
class ListTagSyncTasksFilter extends Shape
{
    /**
     * @param array{
     *     GroupArn?: string,
     *     GroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
