<?php

namespace Sunaoka\Aws\Structures\Organizations\AcceptHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property list<HandshakeParty> $Parties
 * @property 'REQUESTED'|'OPEN'|'CANCELED'|'ACCEPTED'|'DECLINED'|'EXPIRED' $State
 * @property \Aws\Api\DateTimeResult $RequestedTimestamp
 * @property \Aws\Api\DateTimeResult $ExpirationTimestamp
 * @property 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE' $Action
 * @property list<HandshakeResource> $Resources
 */
class Handshake extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Parties?: list<HandshakeParty>,
     *     State?: 'REQUESTED'|'OPEN'|'CANCELED'|'ACCEPTED'|'DECLINED'|'EXPIRED',
     *     RequestedTimestamp?: \Aws\Api\DateTimeResult,
     *     ExpirationTimestamp?: \Aws\Api\DateTimeResult,
     *     Action?: 'INVITE'|'ENABLE_ALL_FEATURES'|'APPROVE_ALL_FEATURES'|'ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE',
     *     Resources?: list<HandshakeResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
