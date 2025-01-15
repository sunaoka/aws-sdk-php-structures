<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountSendingAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $SendingEnabled
 */
class PutAccountSendingAttributesRequest extends Request
{
    /**
     * @param array{SendingEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
