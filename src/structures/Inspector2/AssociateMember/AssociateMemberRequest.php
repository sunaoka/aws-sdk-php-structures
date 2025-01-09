<?php

namespace Sunaoka\Aws\Structures\Inspector2\AssociateMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class AssociateMemberRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
