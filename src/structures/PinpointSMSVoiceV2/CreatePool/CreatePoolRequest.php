<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreatePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginationIdentity
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property bool $DeletionProtectionEnabled
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreatePoolRequest extends Request
{
    /**
     * @param array{
     *     OriginationIdentity: string,
     *     IsoCountryCode: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     DeletionProtectionEnabled?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
