<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ATTACHMENT' $contentDisposition
 * @property string $name
 * @property \Aws\Api\DateTimeResult $uploadedTime
 * @property string $url
 * @property \Aws\Api\DateTimeResult $urlExpiry
 * @property string $attachmentId
 */
class MessageTemplateAttachment extends Shape
{
    /**
     * @param array{
     *     contentDisposition: 'ATTACHMENT',
     *     name: string,
     *     uploadedTime: \Aws\Api\DateTimeResult,
     *     url: string,
     *     urlExpiry: \Aws\Api\DateTimeResult,
     *     attachmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
