<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow\GetRawMessageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $messageId
 */
class GetRawMessageContentRequest extends Request
{
    /**
     * @param array{messageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
