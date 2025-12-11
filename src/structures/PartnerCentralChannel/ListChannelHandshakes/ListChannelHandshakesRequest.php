<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'START_SERVICE_PERIOD'|'REVOKE_SERVICE_PERIOD'|'PROGRAM_MANAGEMENT_ACCOUNT' $handshakeType
 * @property string $catalog
 * @property 'SENDER'|'RECEIVER' $participantType
 * @property int<1, 100>|null $maxResults
 * @property list<'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'>|null $statuses
 * @property list<string>|null $associatedResourceIdentifiers
 * @property Shapes\ListChannelHandshakesTypeFilters|null $handshakeTypeFilters
 * @property Shapes\ListChannelHandshakesTypeSort|null $handshakeTypeSort
 * @property string|null $nextToken
 */
class ListChannelHandshakesRequest extends Request
{
    /**
     * @param array{
     *     handshakeType: 'START_SERVICE_PERIOD'|'REVOKE_SERVICE_PERIOD'|'PROGRAM_MANAGEMENT_ACCOUNT',
     *     catalog: string,
     *     participantType: 'SENDER'|'RECEIVER',
     *     maxResults?: int<1, 100>|null,
     *     statuses?: list<'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'>|null,
     *     associatedResourceIdentifiers?: list<string>|null,
     *     handshakeTypeFilters?: Shapes\ListChannelHandshakesTypeFilters|null,
     *     handshakeTypeSort?: Shapes\ListChannelHandshakesTypeSort|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
