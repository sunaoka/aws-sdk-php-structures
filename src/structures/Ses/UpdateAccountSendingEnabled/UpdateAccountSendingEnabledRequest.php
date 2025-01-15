<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateAccountSendingEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $Enabled
 */
class UpdateAccountSendingEnabledRequest extends Request
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
