<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $AttachmentName
 */
class DeleteAttachmentRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     AttachmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
