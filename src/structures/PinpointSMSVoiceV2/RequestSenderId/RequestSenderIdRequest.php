<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestSenderId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property list<'TRANSACTIONAL'|'PROMOTIONAL'> $MessageTypes
 * @property bool $DeletionProtectionEnabled
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class RequestSenderIdRequest extends Request
{
    /**
     * @param array{
     *     SenderId: string,
     *     IsoCountryCode: string,
     *     MessageTypes?: list<'TRANSACTIONAL'|'PROMOTIONAL'>,
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
