<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistrationAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationAttachmentId
 */
class DeleteRegistrationAttachmentRequest extends Request
{
    /**
     * @param array{RegistrationAttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
