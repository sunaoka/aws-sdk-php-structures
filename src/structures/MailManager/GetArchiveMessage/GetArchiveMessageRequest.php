<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchivedMessageId
 */
class GetArchiveMessageRequest extends Request
{
    /**
     * @param array{ArchivedMessageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
