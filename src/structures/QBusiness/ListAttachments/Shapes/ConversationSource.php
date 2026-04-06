<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $conversationId
 * @property string $attachmentId
 */
class ConversationSource extends Shape
{
    /**
     * @param array{
     *     conversationId: string,
     *     attachmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
