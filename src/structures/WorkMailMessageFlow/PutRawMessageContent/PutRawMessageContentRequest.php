<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow\PutRawMessageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $messageId
 * @property Shapes\RawMessageContent $content
 */
class PutRawMessageContentRequest extends Request
{
    /**
     * @param array{
     *     messageId: string,
     *     content: Shapes\RawMessageContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
