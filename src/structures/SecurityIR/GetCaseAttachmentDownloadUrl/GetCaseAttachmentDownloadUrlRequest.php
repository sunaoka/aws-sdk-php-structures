<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCaseAttachmentDownloadUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $attachmentId
 */
class GetCaseAttachmentDownloadUrlRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     attachmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
