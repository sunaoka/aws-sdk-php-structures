<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $body
 * @property \Aws\Api\DateTimeResult $time
 * @property 'USER'|'SYSTEM' $type
 * @property list<AttachmentOutput> $attachments
 * @property list<SourceAttribution> $sourceAttribution
 * @property ActionReview $actionReview
 * @property ActionExecution $actionExecution
 */
class Message extends Shape
{
    /**
     * @param array{
     *     messageId?: string,
     *     body?: string,
     *     time?: \Aws\Api\DateTimeResult,
     *     type?: 'USER'|'SYSTEM',
     *     attachments?: list<AttachmentOutput>,
     *     sourceAttribution?: list<SourceAttribution>,
     *     actionReview?: ActionReview,
     *     actionExecution?: ActionExecution
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
