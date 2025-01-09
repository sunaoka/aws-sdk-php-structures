<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetMemberRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
