<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $delegatedAdminAccountId
 * @property 'CREATED'|'INVITED'|'DISABLED'|'ENABLED'|'REMOVED'|'RESIGNED'|'DELETED'|'EMAIL_VERIFICATION_IN_PROGRESS'|'EMAIL_VERIFICATION_FAILED'|'REGION_DISABLED'|'ACCOUNT_SUSPENDED'|'CANNOT_CREATE_DETECTOR_IN_ORG_MASTER'|null $relationshipStatus
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Member extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     delegatedAdminAccountId?: string|null,
     *     relationshipStatus?: 'CREATED'|'INVITED'|'DISABLED'|'ENABLED'|'REMOVED'|'RESIGNED'|'DELETED'|'EMAIL_VERIFICATION_IN_PROGRESS'|'EMAIL_VERIFICATION_FAILED'|'REGION_DISABLED'|'ACCOUNT_SUSPENDED'|'CANNOT_CREATE_DETECTOR_IN_ORG_MASTER'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
