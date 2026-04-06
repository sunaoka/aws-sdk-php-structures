<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $AttachmentBody
 * @property string|null $AttachmentUrl
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRegistrationAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentBody?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     AttachmentUrl?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
