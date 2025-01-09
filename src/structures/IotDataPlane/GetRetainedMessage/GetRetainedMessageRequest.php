<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetRetainedMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $topic
 */
class GetRetainedMessageRequest extends Request
{
    /**
     * @param array{topic: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
