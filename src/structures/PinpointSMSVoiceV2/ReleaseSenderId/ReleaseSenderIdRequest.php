<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ReleaseSenderId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SenderId
 * @property string $IsoCountryCode
 */
class ReleaseSenderIdRequest extends Request
{
    /**
     * @param array{
     *     SenderId: string,
     *     IsoCountryCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
