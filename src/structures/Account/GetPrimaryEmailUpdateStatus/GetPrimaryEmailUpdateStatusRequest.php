<?php

namespace Sunaoka\Aws\Structures\Account\GetPrimaryEmailUpdateStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 */
class GetPrimaryEmailUpdateStatusRequest extends Request
{
    /**
     * @param array{AccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
