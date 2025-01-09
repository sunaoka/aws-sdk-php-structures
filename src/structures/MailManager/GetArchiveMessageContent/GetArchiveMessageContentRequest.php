<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchivedMessageId
 */
class GetArchiveMessageContentRequest extends Request
{
    /**
     * @param array{ArchivedMessageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
