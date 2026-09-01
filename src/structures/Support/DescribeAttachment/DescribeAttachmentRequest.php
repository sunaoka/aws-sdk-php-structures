<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attachmentId
 * @property bool|null $dryRun
 */
class DescribeAttachmentRequest extends Request
{
    /**
     * @param array{
     *     attachmentId: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
