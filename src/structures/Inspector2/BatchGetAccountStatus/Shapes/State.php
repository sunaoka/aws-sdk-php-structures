<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALREADY_ENABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'SUSPEND_IN_PROGRESS'|'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_ERROR'|'SSM_UNAVAILABLE'|'SSM_THROTTLED'|'EVENTBRIDGE_UNAVAILABLE'|'EVENTBRIDGE_THROTTLED'|'RESOURCE_SCAN_NOT_DISABLED'|'DISASSOCIATE_ALL_MEMBERS'|'ACCOUNT_IS_ISOLATED' $errorCode
 * @property string $errorMessage
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED' $status
 */
class State extends Shape
{
    /**
     * @param array{
     *     errorCode: 'ALREADY_ENABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'SUSPEND_IN_PROGRESS'|'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_ERROR'|'SSM_UNAVAILABLE'|'SSM_THROTTLED'|'EVENTBRIDGE_UNAVAILABLE'|'EVENTBRIDGE_THROTTLED'|'RESOURCE_SCAN_NOT_DISABLED'|'DISASSOCIATE_ALL_MEMBERS'|'ACCOUNT_IS_ISOLATED',
     *     errorMessage: string,
     *     status: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
