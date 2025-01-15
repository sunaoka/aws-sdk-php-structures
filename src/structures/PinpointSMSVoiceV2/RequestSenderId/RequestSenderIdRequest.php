<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestSenderId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property list<'TRANSACTIONAL'|'PROMOTIONAL'>|null $MessageTypes
 * @property bool|null $DeletionProtectionEnabled
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class RequestSenderIdRequest extends Request
{
    /**
     * @param array{
     *     SenderId: string,
     *     IsoCountryCode: string,
     *     MessageTypes?: list<'TRANSACTIONAL'|'PROMOTIONAL'>|null,
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
