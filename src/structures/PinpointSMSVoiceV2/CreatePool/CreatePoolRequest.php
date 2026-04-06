<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreatePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginationIdentity
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property bool|null $DeletionProtectionEnabled
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreatePoolRequest extends Request
{
    /**
     * @param array{
     *     OriginationIdentity: string,
     *     IsoCountryCode: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     DeletionProtectionEnabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
