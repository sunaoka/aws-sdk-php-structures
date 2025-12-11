<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'START_SERVICE_PERIOD'|'REVOKE_SERVICE_PERIOD'|'PROGRAM_MANAGEMENT_ACCOUNT' $handshakeType
 * @property string $catalog
 * @property string $associatedResourceIdentifier
 * @property Shapes\ChannelHandshakePayload|null $payload
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateChannelHandshakeRequest extends Request
{
    /**
     * @param array{
     *     handshakeType: 'START_SERVICE_PERIOD'|'REVOKE_SERVICE_PERIOD'|'PROGRAM_MANAGEMENT_ACCOUNT',
     *     catalog: string,
     *     associatedResourceIdentifier: string,
     *     payload?: Shapes\ChannelHandshakePayload|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
