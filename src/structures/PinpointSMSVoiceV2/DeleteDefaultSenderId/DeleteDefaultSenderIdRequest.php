<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteDefaultSenderId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 */
class DeleteDefaultSenderIdRequest extends Request
{
    /**
     * @param array{ConfigurationSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
