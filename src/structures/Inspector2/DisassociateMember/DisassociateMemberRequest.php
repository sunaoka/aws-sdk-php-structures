<?php

namespace Sunaoka\Aws\Structures\Inspector2\DisassociateMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class DisassociateMemberRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
