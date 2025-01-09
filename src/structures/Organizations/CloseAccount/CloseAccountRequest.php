<?php

namespace Sunaoka\Aws\Structures\Organizations\CloseAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class CloseAccountRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
