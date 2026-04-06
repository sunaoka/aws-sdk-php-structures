<?php

namespace Sunaoka\Aws\Structures\Iam\GetDelegationRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DelegationRequestId
 * @property string|null $OwnerAccountId
 * @property string|null $Description
 * @property string|null $RequestMessage
 * @property DelegationPermission|null $Permissions
 * @property string|null $PermissionPolicy
 * @property list<string>|null $RolePermissionRestrictionArns
 * @property string|null $OwnerId
 * @property string|null $ApproverId
 * @property 'UNASSIGNED'|'ASSIGNED'|'PENDING_APPROVAL'|'FINALIZED'|'ACCEPTED'|'REJECTED'|'EXPIRED'|null $State
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property string|null $RequestorId
 * @property string|null $RequestorName
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property int<300, 43200>|null $SessionDuration
 * @property string|null $RedirectUrl
 * @property string|null $Notes
 * @property string|null $RejectionReason
 * @property bool|null $OnlySendByOwner
 * @property \Aws\Api\DateTimeResult|null $UpdatedTime
 */
class DelegationRequest extends Shape
{
    /**
     * @param array{
     *     DelegationRequestId?: string|null,
     *     OwnerAccountId?: string|null,
     *     Description?: string|null,
     *     RequestMessage?: string|null,
     *     Permissions?: DelegationPermission|null,
     *     PermissionPolicy?: string|null,
     *     RolePermissionRestrictionArns?: list<string>|null,
     *     OwnerId?: string|null,
     *     ApproverId?: string|null,
     *     State?: 'UNASSIGNED'|'ASSIGNED'|'PENDING_APPROVAL'|'FINALIZED'|'ACCEPTED'|'REJECTED'|'EXPIRED'|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     RequestorId?: string|null,
     *     RequestorName?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     SessionDuration?: int<300, 43200>|null,
     *     RedirectUrl?: string|null,
     *     Notes?: string|null,
     *     RejectionReason?: string|null,
     *     OnlySendByOwner?: bool|null,
     *     UpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
