<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentId
 * @property 'ATTACHMENT' $contentDisposition
 * @property string $name
 * @property \Aws\Api\DateTimeResult $uploadedTime
 * @property string $url
 * @property \Aws\Api\DateTimeResult $urlExpiry
 */
class MessageTemplateAttachment extends Shape
{
    /**
     * @param array{
     *     attachmentId: string,
     *     contentDisposition: 'ATTACHMENT',
     *     name: string,
     *     uploadedTime: \Aws\Api\DateTimeResult,
     *     url: string,
     *     urlExpiry: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
