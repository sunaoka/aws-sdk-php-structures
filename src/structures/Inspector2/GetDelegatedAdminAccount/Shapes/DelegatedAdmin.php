<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetDelegatedAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'CREATED'|'INVITED'|'DISABLED'|'ENABLED'|'REMOVED'|'RESIGNED'|'DELETED'|'EMAIL_VERIFICATION_IN_PROGRESS'|'EMAIL_VERIFICATION_FAILED'|'REGION_DISABLED'|'ACCOUNT_SUSPENDED'|'CANNOT_CREATE_DETECTOR_IN_ORG_MASTER' $relationshipStatus
 */
class DelegatedAdmin extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     relationshipStatus?: 'CREATED'|'INVITED'|'DISABLED'|'ENABLED'|'REMOVED'|'RESIGNED'|'DELETED'|'EMAIL_VERIFICATION_IN_PROGRESS'|'EMAIL_VERIFICATION_FAILED'|'REGION_DISABLED'|'ACCOUNT_SUSPENDED'|'CANNOT_CREATE_DETECTOR_IN_ORG_MASTER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
