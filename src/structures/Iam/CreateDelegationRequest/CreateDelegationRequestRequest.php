<?php

namespace Sunaoka\Aws\Structures\Iam\CreateDelegationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OwnerAccountId
 * @property string $Description
 * @property Shapes\DelegationPermission $Permissions
 * @property string|null $RequestMessage
 * @property string $RequestorWorkflowId
 * @property string|null $RedirectUrl
 * @property string $NotificationChannel
 * @property int<300, 43200> $SessionDuration
 * @property bool|null $OnlySendByOwner
 */
class CreateDelegationRequestRequest extends Request
{
    /**
     * @param array{
     *     OwnerAccountId?: string|null,
     *     Description: string,
     *     Permissions: Shapes\DelegationPermission,
     *     RequestMessage?: string|null,
     *     RequestorWorkflowId: string,
     *     RedirectUrl?: string|null,
     *     NotificationChannel: string,
     *     SessionDuration: int<300, 43200>,
     *     OnlySendByOwner?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
