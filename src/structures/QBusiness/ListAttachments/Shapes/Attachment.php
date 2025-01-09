<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentId
 * @property string $conversationId
 * @property string $name
 * @property CopyFromSource $copyFrom
 * @property string $fileType
 * @property int $fileSize
 * @property string $md5chksum
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'FAILED'|'SUCCESS' $status
 * @property ErrorDetail $error
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string,
     *     conversationId?: string,
     *     name?: string,
     *     copyFrom?: CopyFromSource,
     *     fileType?: string,
     *     fileSize?: int,
     *     md5chksum?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     status?: 'FAILED'|'SUCCESS',
     *     error?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
