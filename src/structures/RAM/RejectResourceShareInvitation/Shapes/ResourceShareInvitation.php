<?php

namespace Sunaoka\Aws\Structures\RAM\RejectResourceShareInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceShareInvitationArn
 * @property string|null $resourceShareName
 * @property string|null $resourceShareArn
 * @property string|null $senderAccountId
 * @property string|null $receiverAccountId
 * @property \Aws\Api\DateTimeResult|null $invitationTimestamp
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'EXPIRED'|null $status
 * @property list<ResourceShareAssociation>|null $resourceShareAssociations
 * @property string|null $receiverArn
 */
class ResourceShareInvitation extends Shape
{
    /**
     * @param array{
     *     resourceShareInvitationArn?: string|null,
     *     resourceShareName?: string|null,
     *     resourceShareArn?: string|null,
     *     senderAccountId?: string|null,
     *     receiverAccountId?: string|null,
     *     invitationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'ACCEPTED'|'REJECTED'|'EXPIRED'|null,
     *     resourceShareAssociations?: list<ResourceShareAssociation>|null,
     *     receiverArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
