<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateAccountSendingEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $Enabled
 */
class UpdateAccountSendingEnabledRequest extends Request
{
    /**
     * @param array{Enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
