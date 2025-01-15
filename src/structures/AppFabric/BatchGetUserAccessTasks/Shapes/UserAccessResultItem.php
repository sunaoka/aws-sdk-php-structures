<?php

namespace Sunaoka\Aws\Structures\AppFabric\BatchGetUserAccessTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $app
 * @property string|null $tenantId
 * @property string|null $tenantDisplayName
 * @property string|null $taskId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'EXPIRED'|null $resultStatus
 * @property string|null $email
 * @property string|null $userId
 * @property string|null $userFullName
 * @property string|null $userFirstName
 * @property string|null $userLastName
 * @property string|null $userStatus
 * @property TaskError|null $taskError
 */
class UserAccessResultItem extends Shape
{
    /**
     * @param array{
     *     app?: string|null,
     *     tenantId?: string|null,
     *     tenantDisplayName?: string|null,
     *     taskId?: string|null,
     *     resultStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'EXPIRED'|null,
     *     email?: string|null,
     *     userId?: string|null,
     *     userFullName?: string|null,
     *     userFirstName?: string|null,
     *     userLastName?: string|null,
     *     userStatus?: string|null,
     *     taskError?: TaskError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
