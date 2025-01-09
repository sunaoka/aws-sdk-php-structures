<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetDefaultSenderId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $SenderId
 */
class SetDefaultSenderIdRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     SenderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
