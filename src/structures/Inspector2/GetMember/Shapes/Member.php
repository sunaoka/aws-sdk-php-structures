<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $delegatedAdminAccountId
 * @property 'CREATED'|'INVITED'|'DISABLED'|'ENABLED'|'REMOVED'|'RESIGNED'|'DELETED'|'EMAIL_VERIFICATION_IN_PROGRESS'|'EMAIL_VERIFICATION_FAILED'|'REGION_DISABLED'|'ACCOUNT_SUSPENDED'|'CANNOT_CREATE_DETECTOR_IN_ORG_MASTER' $relationshipStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Member extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     delegatedAdminAccountId?: string,
     *     relationshipStatus?: 'CREATED'|'INVITED'|'DISABLED'|'ENABLED'|'REMOVED'|'RESIGNED'|'DELETED'|'EMAIL_VERIFICATION_IN_PROGRESS'|'EMAIL_VERIFICATION_FAILED'|'REGION_DISABLED'|'ACCOUNT_SUSPENDED'|'CANNOT_CREATE_DETECTOR_IN_ORG_MASTER',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
