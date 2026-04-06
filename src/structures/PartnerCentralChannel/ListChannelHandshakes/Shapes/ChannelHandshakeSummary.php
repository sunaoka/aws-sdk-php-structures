<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $catalog
 * @property 'START_SERVICE_PERIOD'|'REVOKE_SERVICE_PERIOD'|'PROGRAM_MANAGEMENT_ACCOUNT'|null $handshakeType
 * @property string|null $ownerAccountId
 * @property string|null $senderAccountId
 * @property string|null $senderDisplayName
 * @property string|null $receiverAccountId
 * @property string|null $associatedResourceId
 * @property HandshakeDetail|null $detail
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'|null $status
 */
class ChannelHandshakeSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     catalog?: string|null,
     *     handshakeType?: 'START_SERVICE_PERIOD'|'REVOKE_SERVICE_PERIOD'|'PROGRAM_MANAGEMENT_ACCOUNT'|null,
     *     ownerAccountId?: string|null,
     *     senderAccountId?: string|null,
     *     senderDisplayName?: string|null,
     *     receiverAccountId?: string|null,
     *     associatedResourceId?: string|null,
     *     detail?: HandshakeDetail|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
