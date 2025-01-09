<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCaseAttachmentUploadUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $fileName
 * @property int<1, 104857600> $contentLength
 * @property string $clientToken
 */
class GetCaseAttachmentUploadUrlRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     fileName: string,
     *     contentLength: int<1, 104857600>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
