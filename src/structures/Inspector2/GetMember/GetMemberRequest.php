<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class GetMemberRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
