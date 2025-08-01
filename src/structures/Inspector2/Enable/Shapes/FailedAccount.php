<?php

namespace Sunaoka\Aws\Structures\Inspector2\Enable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null $status
 * @property ResourceStatus|null $resourceStatus
 * @property 'ALREADY_ENABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'SUSPEND_IN_PROGRESS'|'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_ERROR'|'SSM_UNAVAILABLE'|'SSM_THROTTLED'|'EVENTBRIDGE_UNAVAILABLE'|'EVENTBRIDGE_THROTTLED'|'RESOURCE_SCAN_NOT_DISABLED'|'DISASSOCIATE_ALL_MEMBERS'|'ACCOUNT_IS_ISOLATED'|'EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'|'EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED' $errorCode
 * @property string $errorMessage
 */
class FailedAccount extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     status?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null,
     *     resourceStatus?: ResourceStatus|null,
     *     errorCode: 'ALREADY_ENABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'SUSPEND_IN_PROGRESS'|'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_ERROR'|'SSM_UNAVAILABLE'|'SSM_THROTTLED'|'EVENTBRIDGE_UNAVAILABLE'|'EVENTBRIDGE_THROTTLED'|'RESOURCE_SCAN_NOT_DISABLED'|'DISASSOCIATE_ALL_MEMBERS'|'ACCOUNT_IS_ISOLATED'|'EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'|'EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
