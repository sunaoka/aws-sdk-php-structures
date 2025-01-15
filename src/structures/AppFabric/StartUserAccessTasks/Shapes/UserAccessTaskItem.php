<?php

namespace Sunaoka\Aws\Structures\AppFabric\StartUserAccessTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $app
 * @property string $tenantId
 * @property string|null $taskId
 * @property TaskError|null $error
 */
class UserAccessTaskItem extends Shape
{
    /**
     * @param array{
     *     app: string,
     *     tenantId: string,
     *     taskId?: string|null,
     *     error?: TaskError|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
