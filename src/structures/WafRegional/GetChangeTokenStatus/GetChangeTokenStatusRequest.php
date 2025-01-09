<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetChangeTokenStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeToken
 */
class GetChangeTokenStatusRequest extends Request
{
    /**
     * @param array{ChangeToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
