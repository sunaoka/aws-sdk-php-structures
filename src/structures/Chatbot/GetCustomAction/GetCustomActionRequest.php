<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomActionArn
 */
class GetCustomActionRequest extends Request
{
    /**
     * @param array{CustomActionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
