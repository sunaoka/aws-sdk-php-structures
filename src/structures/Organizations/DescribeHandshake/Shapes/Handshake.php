<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property list<HandshakeParty>|null $Parties
 * @property 'REQUESTED'|'OPEN'|'CANCELED'|'ACCEPTED'|'DECLINED'|'EXPIRED'|null $State
 * @property \Aws\Api\DateTimeResult|null $RequestedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ExpirationTimestamp
 * @property 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'|'TRANSFER_RESPONSIBILITY'|null $Action
 * @property list<HandshakeResource>|null $Resources
 */
class Handshake extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Parties?: list<HandshakeParty>|null,
     *     State?: 'REQUESTED'|'OPEN'|'CANCELED'|'ACCEPTED'|'DECLINED'|'EXPIRED'|null,
     *     RequestedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Action?: 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'|'TRANSFER_RESPONSIBILITY'|null,
     *     Resources?: list<HandshakeResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
