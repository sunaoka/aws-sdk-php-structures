<?php

namespace Sunaoka\Aws\Structures\AppFabric\BatchGetUserAccessTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $app
 * @property string $tenantId
 * @property string $tenantDisplayName
 * @property string $taskId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'EXPIRED' $resultStatus
 * @property string $email
 * @property string $userId
 * @property string $userFullName
 * @property string $userFirstName
 * @property string $userLastName
 * @property string $userStatus
 * @property TaskError $taskError
 */
class UserAccessResultItem extends Shape
{
    /**
     * @param array{
     *     app?: string,
     *     tenantId?: string,
     *     tenantDisplayName?: string,
     *     taskId?: string,
     *     resultStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'EXPIRED',
     *     email?: string,
     *     userId?: string,
     *     userFullName?: string,
     *     userFirstName?: string,
     *     userLastName?: string,
     *     userStatus?: string,
     *     taskError?: TaskError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
