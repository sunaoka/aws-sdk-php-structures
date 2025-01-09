<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutAccountSendingAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $SendingEnabled
 */
class PutAccountSendingAttributesRequest extends Request
{
    /**
     * @param array{SendingEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
