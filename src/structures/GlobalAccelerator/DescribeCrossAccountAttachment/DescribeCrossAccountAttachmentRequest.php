<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCrossAccountAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentArn
 */
class DescribeCrossAccountAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
