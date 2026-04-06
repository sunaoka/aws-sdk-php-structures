<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCrossAccountAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentArn
 */
class DeleteCrossAccountAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
