<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelContract;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MANAGED_SERVICES_ATTESTATION' $contractType
 * @property string $catalog
 * @property Shapes\ChannelContractPayload $payload
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateChannelContractRequest extends Request
{
    /**
     * @param array{
     *     contractType: 'MANAGED_SERVICES_ATTESTATION',
     *     catalog: string,
     *     payload: Shapes\ChannelContractPayload,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
