<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $AttachmentBody
 * @property string $AttachmentUrl
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateRegistrationAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentBody?: string|resource|\Psr\Http\Message\StreamInterface,
     *     AttachmentUrl?: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
