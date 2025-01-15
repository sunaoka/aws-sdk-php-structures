<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $messageId
 * @property string|null $body
 * @property \Aws\Api\DateTimeResult|null $time
 * @property 'USER'|'SYSTEM'|null $type
 * @property list<AttachmentOutput>|null $attachments
 * @property list<SourceAttribution>|null $sourceAttribution
 * @property ActionReview|null $actionReview
 * @property ActionExecution|null $actionExecution
 */
class Message extends Shape
{
    /**
     * @param array{
     *     messageId?: string|null,
     *     body?: string|null,
     *     time?: \Aws\Api\DateTimeResult|null,
     *     type?: 'USER'|'SYSTEM'|null,
     *     attachments?: list<AttachmentOutput>|null,
     *     sourceAttribution?: list<SourceAttribution>|null,
     *     actionReview?: ActionReview|null,
     *     actionExecution?: ActionExecution|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
