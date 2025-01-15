<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attachmentId
 * @property string|null $conversationId
 * @property string|null $name
 * @property CopyFromSource|null $copyFrom
 * @property string|null $fileType
 * @property int|null $fileSize
 * @property string|null $md5chksum
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'FAILED'|'SUCCESS'|null $status
 * @property ErrorDetail|null $error
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string|null,
     *     conversationId?: string|null,
     *     name?: string|null,
     *     copyFrom?: CopyFromSource|null,
     *     fileType?: string|null,
     *     fileSize?: int|null,
     *     md5chksum?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'FAILED'|'SUCCESS'|null,
     *     error?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
