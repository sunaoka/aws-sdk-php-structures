<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteMemberRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
