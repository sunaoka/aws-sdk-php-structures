<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteCustomAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomActionArn
 */
class DeleteCustomActionRequest extends Request
{
    /**
     * @param array{CustomActionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
