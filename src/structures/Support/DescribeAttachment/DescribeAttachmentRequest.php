<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attachmentId
 */
class DescribeAttachmentRequest extends Request
{
    /**
     * @param array{attachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
