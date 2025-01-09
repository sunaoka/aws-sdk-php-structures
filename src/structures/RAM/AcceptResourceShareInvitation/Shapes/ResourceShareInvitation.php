<?php

namespace Sunaoka\Aws\Structures\RAM\AcceptResourceShareInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceShareInvitationArn
 * @property string $resourceShareName
 * @property string $resourceShareArn
 * @property string $senderAccountId
 * @property string $receiverAccountId
 * @property \Aws\Api\DateTimeResult $invitationTimestamp
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'EXPIRED' $status
 * @property list<ResourceShareAssociation> $resourceShareAssociations
 * @property string $receiverArn
 */
class ResourceShareInvitation extends Shape
{
    /**
     * @param array{
     *     resourceShareInvitationArn?: string,
     *     resourceShareName?: string,
     *     resourceShareArn?: string,
     *     senderAccountId?: string,
     *     receiverAccountId?: string,
     *     invitationTimestamp?: \Aws\Api\DateTimeResult,
     *     status?: 'PENDING'|'ACCEPTED'|'REJECTED'|'EXPIRED',
     *     resourceShareAssociations?: list<ResourceShareAssociation>,
     *     receiverArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
