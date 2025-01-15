<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupArn
 * @property string|null $GroupName
 */
class ListTagSyncTasksFilter extends Shape
{
    /**
     * @param array{
     *     GroupArn?: string|null,
     *     GroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
