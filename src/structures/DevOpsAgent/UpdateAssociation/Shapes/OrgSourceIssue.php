<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'accountSuspended'|'accountNotInScope'|'managementAccountNotSupported'|'stackInstanceInoperable'|'accessDenied'|'deploymentFailed'|'secondaryAccountLimitExceeded' $reasonCode
 * @property int<1, max> $accountCount
 * @property list<string> $accountIds
 * @property string|null $message
 */
class OrgSourceIssue extends Shape
{
    /**
     * @param array{
     *     reasonCode: 'accountSuspended'|'accountNotInScope'|'managementAccountNotSupported'|'stackInstanceInoperable'|'accessDenied'|'deploymentFailed'|'secondaryAccountLimitExceeded',
     *     accountCount: int<1, max>,
     *     accountIds: list<string>,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
