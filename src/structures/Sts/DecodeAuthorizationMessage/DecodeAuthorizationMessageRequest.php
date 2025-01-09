<?php

namespace Sunaoka\Aws\Structures\Sts\DecodeAuthorizationMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EncodedMessage
 */
class DecodeAuthorizationMessageRequest extends Request
{
    /**
     * @param array{EncodedMessage: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
